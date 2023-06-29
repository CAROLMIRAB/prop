## About

Este proyecto es un monorepo lerna que cuenta con una api hecha en Laravel 9 y un cliente hecho en React 17 y con un entorno dockerizado.

# Getting Started

Para empezar es necesario que sigas los siguientes pasos

- Entra dentro del path /packages/api
- Renombra el archivo .env.example a .env (no cambies ninguna credencial ya está listo para el docker).
- Ahora levantemos docker desde la raiz del proyecto, ejecuta lo siguiente (es muy importante que tengas docker instalado):

```shell
docker compose up -d
```

### Used

- **[Docker](https://www.docker.com/)**
- **[Lerna 7](https://lerna.js.org/)**
- **[PHP 8](https://www.php.net/releases/8.0/en.php)**
- **[Laravel 9](https://laravel.com/)**
- **[React 17](https://react.dev/)**
- **[Material UI](https://mui.com/material-ui)**
