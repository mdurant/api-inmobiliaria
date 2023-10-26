
# Api consulta Inmobiliaria

Proyecto realizado en Laravel 10.x con BD Mysql.
Objetivo:

- Listar proyectos inmobiliarios con sus respectivas relaciones (paginable y
ordenable).
- Buscar proyectos inmobiliarios (por ejemplo: nombre, ubicación, precio desde/hasta,
código e ID (UUID v4)).
- Crear proyecto inmobiliario.
- Modificar proyecto inmobiliario.
- Eliminar proyecto inmobiliario.
- Remoción de proyecto inmobiliario.

# Requisitos Previos

1- Tener instalado Servidor MYSQL. 

2- Tener instalado composer.(https://getcomposer.org/download/)

3- Tener instalado un cliente de consultas de API:  Postman /Insomnia

4- Crear BD: api-sample-inmobiliaria

5- Si desea cambiar el nombre, recuerde que puede hacerlo en su variable de entorno laravel : (.env) y toda la configuración necesaria de su configuración local.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```



# Ejecución Local

1- Clonar proyecto: git@github.com:mdurant/api-inmobiliaria.git

2- cd nombre_proyecto (ej: api-inmobiliaria)

3- mv .env-sample .env. (configure su archivo a su necesidad)

# Tablas

1- proyecto_inmobiliarios : Detalla los proyectos inmobiliarios

2- clientes: detalla los clientes.

3- unidades: detalla las unidades de casas, deptos, etc de los proyectos.


# Documentación Postman y ejemplos.

https://documenter.getpostman.com/view/101988/2s9YRFVVKp
## Autor

- [@mauriciodurant](https://github.com/mdurant/api-inmobiliaria)


## Tech Stack

**Client:** Postman/Insomnia

**Server:** Laravel 10.x, Mysql


## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## 🔗 Links
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://github.com/mdurant)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/mdurantorres/)

