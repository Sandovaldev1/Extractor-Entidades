<<<<<<< HEAD
# Extractor-Entidades
Esta es una aplicación web que extrae y muestra las entidades más relevantes de una URL dada utilizando la API de extracción de entidades de Google. La aplicación está construida con Laravel, jQuery y Python.
-----------------------------------------------------------------------------
#Requisitos
-----------------------------------------------------------------------------
Para ejecutar este proyecto, necesitas tener instalado lo siguiente:

PHP 8.x

Composer

Node.js

NPM/Yarn

Python 3.x

Laravel 9.x

Clave de API de Google Cloud (La clave proporcionada tiene una vigencia de 48 horas)

-------------------------------------------------------------------------------
#Instalación
-------------------------------------------------------------------------------
Sigue estos pasos para instalar las dependencias y configurar el proyecto:

1- Clonar el repositorio:
git clone https://github.com/Sandovaldev1/Extractor-Entidades.git
cd entity-extraction-app

2- Instalar las dependencias de PHP:
En la consola bash poner el siguiente comando:
composer install

3- Instalar las dependencias de Node.js:
npm install o yarn install

4- Instalar las dependencias de Python:
pip install -r requirements.txt

------------------------------------------------------------------------------
#Configuración
------------------------------------------------------------------------------
Sigue estos pasos para configurar el proyecto:

1- Copia el archivo .env.example y renómbralo a .env, 

2- luego configura tus variables de entorno en la consola o terminal:
   cp .env.example .env
   
3- Genera la clave de la aplicación en tu consola o terminal:
php artisan key:generate

4- Configura la Clave de API de Google Cloud:

Descarga tu archivo de credenciales JSON desde Google Cloud.
Mueve el archivo al directorio config/ y nómbralo google-cloud-key.json.
Actualiza tu archivo .env con la ruta a este archivo.

--------------------------------------------------------------------------------
#Ejecutar el Proyecto
--------------------------------------------------------------------------------
Sigue estos pasos para ejecutar la aplicación en un entorno de desarrollo:

1- Inicia el servidor de desarrollo local en tu consola o terminal:
php artisan serve

2- Ejecuta el proceso de compilación del frontend desde tu terminal:
npm run dev

3- Visita la aplicación en tu navegador:
http://localhost:8000

---------------------------------------------------------------------------------
#Pruebas
---------------------------------------------------------------------------------
Para ejecutar las pruebas del proyecto, utiliza el siguiente comando en tu terminal:
php artisan test

---------------------------------------------------------------------------------
#Despliegue
---------------------------------------------------------------------------------
Sigue estos pasos para desplegar la aplicación en un entorno de producción:
1- Compila los recursos del frontend en tu terminal:
npm run build

2- Configura el entorno de producción:

- Actualiza el archivo .env con los valores de producción.
- Ejecuta las migraciones y seeders si es necesario.
- Despliega el proyecto utilizando un servicio como Forge, Heroku, etc.
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 52ac0f2 (Subiendo aplicación)
