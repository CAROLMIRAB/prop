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

Para probar la api puedes encontrar una colleccion de postman llamada: Prop.postman_collection en la raiz de este proyecto allí podrás ver algo de la documentación necesaria para usar la api.

Cuando veas este mensaje estamos casi listos

```shell
Container prop-mysql-1  Creating
Container prop-mysql-1  Created
Container api  Creating
Container api  Created
Container client  Creating
Container client  Created
Container prop-mysql-1  Starting
Container prop-mysql-1  Started
Container api  Starting
Container api  Started
Container client  Starting
Container client  Started

```

Por ultimo es necesario que corras este comando para crear la bd y agregar data de prueba

```shell
docker exec api php artisan migrate:fresh --seed
```

Ahora puedes verlo en funcionamiento aquí:

Url client: http://localhost:3004/

Para consumir la api lo puedes hacer desde la colleccion de postman (con documentación) agregada al proyecto que se llama
Prop.postman_collection.json la puedes usar importando una colleccion en postman y agregando este archivo.

Url api: http://localhost:8000/

### Used

- **[Docker](https://www.docker.com/)**
- **[Lerna 7](https://lerna.js.org/)**
- **[PHP 8](https://www.php.net/releases/8.0/en.php)**
- **[Laravel 9](https://laravel.com/)**
- **[React 17](https://react.dev/)**
- **[Material UI](https://mui.com/material-ui)**
