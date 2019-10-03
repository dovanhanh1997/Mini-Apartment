Mini-Apartment
To run project, plesase following the steps below:
1. You need Install composer:

    command: composer install

2. Next rename .env.example file to .env in project so you can App_key generate:

    command: php artisan key:generate

3. Config file .env

    Create mini-apart into your Database and rename (DB_DATABASE=mini-apart)
    Change change your username (DB_USERNAME) and password (DB_PASSWORD) to login mysql

Run project

    command: php artisan serve
    Login with username (admin@gmail.com) and password (admin)
