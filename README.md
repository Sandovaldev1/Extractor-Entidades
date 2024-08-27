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
