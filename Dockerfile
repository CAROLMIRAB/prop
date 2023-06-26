FROM php:8.1-apache as api
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
WORKDIR /var/www/
RUN apt-get update && apt-get install -y \
  build-essential \
  libzip-dev \
  libpng-dev \
  libjpeg62-turbo-dev \
  libfreetype6-dev \
  libonig-dev \
  locales \
  zip \
  jpegoptim optipng pngquant gifsicle \
  vim \
  git \
  curl \
  wget

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN wget -O composer-setup.php https://getcomposer.org/installer \ 
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY ./packages/api /var/www/api
WORKDIR /var/www/api
RUN composer update --no-install --prefer-dist --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs
RUN chmod 775 -R /var/www/api/storage/ \
  && chown -R www-data:www-data /var/www/  \
  && a2enmod rewrite
RUN php artisan key:generate
COPY ./packages/api/api.conf /etc/apache2/sites-available/
RUN a2ensite api.conf && a2dissite 000-default.conf && service apache2 restart
USER root
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
EXPOSE 80

FROM node:14 as client
WORKDIR /app
COPY ./packages/client/package*.json  ./
COPY ./packages/client/  ./
RUN npm install 
RUN npm cache clean --force
RUN npm run build

FROM nginx:1.25.1-alpine
WORKDIR /usr/share/nginx/html
RUN rm -rf ./*
COPY --from=builder /app/dist .
ENTRYPOINT [ "nginx", "-g", "deamon off;" ]

