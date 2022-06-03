# About

This tool is built on Laravel

## Setup

- PHP 7.3 with MySQL required
- Clone this repo
- Run composer install to get dependencies
- Run php artisan mgirate to create database tables
- Run php artisan db:seed --class=UserSeeder to seed the database with the admin and data users

## Bash Script for IT Admin

`git clone https://github.com/PaulKish/lastmile.git
 sudo chown -R www-data:www-data lastmile
 sudo cp -a lastmile/. /var/www/html`