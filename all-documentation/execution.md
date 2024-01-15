# Installation of base programs

### XAMPP

        https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe

### MySQL

        https://dev.mysql.com/get/Downloads/MySQL-8.2/mysql-8.2.0-winx64.msi

Remember to change the default user password and create a DB to be able to work, both password and DB name must be in the .env file

### Composer

        https://getcomposer.org/Composer-Setup.exe

# Installation commands:

        composer install

To do this you need to enable certain things in the php.init file

# Execution commands:

You probably need to edit the environment variables

-   Drop database

          php artisan migrate:reset

-   Fill the database with the project tables

        php artisan migrate

-   Create an admin (only way)

        php artisan db:seed

-   Start the server

        php artisan serve

# Postman testing:

Remember to import the postman file that is in this same folder to be able to make requests

In the endpoints folder you will find the description of each of the endpoints, what they can do and their restrictions
