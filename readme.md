# Grocery Inventory system uy23

Its build with latest laravel 5.6 and css framework bootstrap 4 css. User can track their inventory and sales data.


# Technology
* Bootstrap 4
* Laravel 5.6 

# How to run this project
#### First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/poloey/laravel-grocery-inventory-uy23.git
cd laravel-grocery-inventory-uy23
~~~

#### Downloading composer package  and dumping
~~~bash
composer install
composer dump-autoload
~~~


#### Configure project by resetting old data and generating new key
~~~php
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan key:generate
~~~
### Create a database name with `inventory`. Or you can change database name from `.env` file 

~~~bash
php artisan migrate
~~~

### seed database with dummy data 

~~~bash
php artisan db:seed
~~~

### Serving laravel project

~~~
php artisan serve
~~~


## dummy user login credentials     

* email: `arafat@gmail.com` pass: `secret`
* email: `nur@gmail.com` pass: `secret`
* email: `tahmina@gmail.com` pass: `secret`
* email: `farhana@gmail.com` pass: `secret`
* email: `sakhawat@gmail.com` pass: `secret`


Take care 
