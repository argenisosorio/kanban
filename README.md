# Ejemplo de un KANBAN

## Requerimientos
```
Laravel Framework 8.49.1
```
<b>Nota:</b>
<br />
Usaremos $ para describir los comandos que se usarán con el usuario regular.

1- Ejecute los siguientes comandos en secuencia para implementar el proyecto en
un ambiente de desarrollo.
```
$ cp .env.example .env

$ composer install

$ npm install

$ npm run dev
```
2- Cree y configure la base de datos en el archivo .env.
```
$ php artisan key:generate

$ php artisan migrate

$ php artisan serve
```