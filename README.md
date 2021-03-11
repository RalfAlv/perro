<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGjd3YCecIm4_yXSyjB6tjye-rwifz4j8X-A&usqp=CAU" width="400">
</a>
</p>

## About: This projet of a TODO LIST
This is a example project of a TODO LIST

## Contributing
Rafael Alvarez 

## setup instructions

## Instrucciones de Instalación

    instalar php7
    Instalación de PHP 7x.
    Instalación de manejador de paquetes para PHP (Composer).
    Instalación de nodejs.
    Instalación de la Base de Datos MySQL 8x. [detalles] ( https://github.com/JRamyro/cecytem/blob/main/MySQLInstallation.md )
    Instalación de versionador de código GIT.
    
## Se crea carpeta cambiar a carpeta(terminal)

Se clona el proyecto (se copia link desde la cuenta de Github)

    git clone https://github.com/RalfAlv/perro.git

## Se abre el proyecto en phpstorm

Ejecutar en la terminal se emplea:

    composer install

    cp .env.example .env
    php artisan key:generate
    
## Configuracion base de datos

Crear una DB y usuario

    mysql -u root -p
    CREATE DATABASE dblaravel; 
    
Se crea usuario y passw

    create user 'ouser'@'%' identified by 'QqX05.SA%>UNdd';
    
Se otorgan todos los privilegios a usuario ramiro

    GRANT ALL PRIVILEGES ON *.* TO 'ouser'@'%';
    
Salimos de la MySQL

    exit
    
## Añandir información de la BD a (.env)

DB_DATABASE=<replacename>
DB_USERNAME=<replacename>
DB_PASSWORD=<replacename>

## Instalar dependencias de javascript mediante:

    npm install
    npm run dev
    
Generar modelos

    php artisan migrate
    
## Ejecutar app

    php artisan serve --host=0.0.0.0
    
Ejecutar comandos de git para la cuenta en uso

    git config --global user.email "you@example.com"
    git config --global user.name "Tu Nombre"

## guardar cambios (modificaciones)

    git add .
    git commit -m "comentario"
    git push origin main
    .....
    (Se solicita usuario de Github y pass)

## Estado de git
    
    git status

