# El Rincón Dealership

Project about a dealership created with Laravel, Laragon, and PHP.

## Prerequisites 📋

You need to install Laragon and the latest versions of Node and PHP.

## Installation 🔧

After installing Laragon and the latest versions of Node and PHP, you need to install Laravel, which can be done from the Laragon terminal using the command 
"composer global require laravel/installer".

## MySQL Database Creation

### Database create query
CREATE DATABASE dealership;

### Cars table create query
CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    hp VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

### Remember
It is necessary to create the "cars" table for the project to work correctly, since a table called "dealership" will be automatically created within the database, 
but it is not the one that the project needs. But also, that table called "dealership" can be renamed "cars", since it should already have the fields created.

## Built with 🛠️

* [PHP](https://www.php.net)
* [Laravel](https://www.laravel.com/)
* [Laragon](https://www.laragon.org)
* [NodeJS](https://www.nodejs.org)
* [MySQL](https://www.mysql.com)

## Authors ✒️

* **Aimar Alonso** - *Initial Work* - [aiimar](https://github.com/aiimar)
