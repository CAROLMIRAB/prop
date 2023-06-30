## About

Este proyecto es un monorepo lerna que cuenta con una aplicacion hecha en Laravel 9 y React 17 y con un entorno dockerizado.

# Getting Started

Para empezar es necesario que sigas los siguientes pasos

- Entra dentro del path /packages/api
- Renombra el archivo .env.example a .env (no cambies ninguna credencial ya está listo para el docker).
- Ahora levantemos docker desde la raiz del proyecto, ejecuta lo siguiente (es muy importante que tengas docker instalado):

```shell
docker compose up -d
```

Esto puede tardar algunos minutos ¡puedes tomar un café mientras esperas!

Para probar la api puedes encontrar una colleccion de postman llamada: Propital.postman_collection en la raiz de este proyecto allí podrás ver algo de la documentación necesaria para usar la api.

Cuando veas este mensaje estamos listos para probar

```shell
Container propital-mysql-1  Creating
Container propital-mysql-1  Created
Container api  Creating
Container api  Created
Container client  Creating
Container client  Created
Container propital-mysql-1  Starting
Container propital-mysql-1  Started
Container api  Starting
Container api  Started
Container client  Starting
Container client  Started

```

Url api: http://localhost:8000/

Url client: http://localhost:3004/

### Used

- **[Docker](https://www.docker.com/)**
- **[Lerna 7](https://lerna.js.org/)**
- **[PHP 8](https://www.php.net/releases/8.0/en.php)**
- **[Laravel 9](https://laravel.com/)**
- **[React 17](https://react.dev/)**
- **[Material UI](https://mui.com/material-ui)**
