## About

Esta api fué desarrollada con el framework Laravel es una api restFull que permite agregar proyectos inmobiliarios y se conecta a su vez con google map.

## Getting Starting

-   Entra dentro del path /packages/api
-   Renombra el archivo .env.example a .env cambia las crecenciales necesarias para levantar el entorno.
-   Ejecuta en el bash composer install (recuerda que debes tenerlo instalado en tu maquina)

```shell
composer install
```

-   Debes ejecutar tambien para crear la bd

```shell
php artisan migrate:fresh --seed
```

-   Ahora puedes levantar el entorno

```shell
php artisan serve
```

### Dependencies

-   **[PHP](8.0)**
