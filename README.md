# Application: f1races

# A simple CRUD application for F1 racing events

# SETUP:

1) create database called *f1racingevents* on MYSQL

2) run command: git clone https://github.com/khalipha/f1races.git
3) run command: cd f1races
4) run command: composer update
5) rename .env.example to .env
6) configure .env file to include:

DB_DATABASE=f1racingevents
DB_USERNAME=root
DB_PASSWORD=

7) run command: php artisan key:generate
8) run command: php artisan migrate
9) run command: php artisan serve
10) Navigate to url: http://127.0.0.1:8000/

# NB://

1.1) To view PAST RACES capture a date and time prior to current OS date
1.2) To view and update RACES THAT HAVE TAKEN PLACE capture a date and time future to current OS date
1.3) To create an event use button on the screen, upon insertion, perform CRUD operations
