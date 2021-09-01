## About CoronaVel

CoronaaVel is a starter Laravel admin panel application with basic user and role management and is based on the [Corona Bootstrap Dark Theme](https://www.bootstrapdash.com/demo/corona-free/jquery/template/index.html). The package uses the Laravel Blade templating engine. This is an ideal Laravel 8 admin panel for small projects without the complexities of VUE or REACT.

## Installation instructions

1. Clone this repository

```shell
git clone https://github.com/gosman/coronavel
```    

2. Change directory

```shell
cd coronavel
```    

3. Update Composer

```shell
composer update
```     

4. Install NPM

```shell
npm install
```

5. Rename .env.example to .env

```shell
mv .env.example .env
```

6. Configure .env file with DB and App Settings [Reference](https://laravel.com/docs/8.x/configuration#environment-variable-types)


7. Generate application key

```shell
php artisan key:generate
``` 

8. Run migrations

```shell
php artisan migrate
``` 

9. Seed database

```shell
php artisan db:seed
``` 

## Login

If you followed the steps above, 2 default accounts will have been created.

**Admin account:**

`admin@example.com`

`Passw0rd`

**User account:**

`user@example.com`

`Passw0rd`

## Branding

**Replace the following files**

[/public/assets/images/favicon.ico](public/assets/images/favicon.ico)

[/public/assets/images/logo.svg](public/assets/images/logo.svg)

[/public/assets/images/logo-mini.svg](public/assets/images/logo-mini.svg)

## Sidebar Menu

**Sidebar configuration file**

[/config/sidebar.php](config/sidebar.php)

**Sidebar icons**

[icons](https://www.bootstrapdash.com/demo/corona-free/jquery/template/pages/icons/mdi.html)

## Assets

**CSS** [/resources/css/app.css](resources/css/app.scss)

**JS** [/resources/js/app.js](resources/js/app.js)

Changes made to these file need to compiled [Reference](https://laravel.com/docs/8.x/mix)

```shell
npm run dev
``` 

## Support

[Expert Digital Marketing](https://www.edm.ie/)
