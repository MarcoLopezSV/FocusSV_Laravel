<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project
Project made with the Laravel Framework, to show a list for the data received from an External API
and send it to a chart for better representation of the data, made with PHP 8.0.2 and Laravel 9.0.

Chart was made using Blade along JS/CSS libraries called Chart JS that uses a script to make the chart with the information given by the Database

You will also find on this repository a custom command that gets the data from the API and shows it on console before using it to send the data to the database

## Installation

For the installation of this Project you will need to follow these steps:
1. Download the project unto your PC.
2. Unzip the file.
3. Download an IDE of your preference, for this project I used Visual Code if you already have one then skip.
4. Open the folder with said IDE.
5. Start your DB and create a new database or you can use one that is completely empty. 
6. Change the .env file with all the information so the project can establish a connection with your DB.
7. Use php artisan migrate command to send all the information of the tables to the DB.
8. Do php artisan getapi:data custom command to send all the information to the table.
9. If the data doesnt appear it is recommended to manually insert them onto the DB.
9. Run the project from terminal or console with php artisan serve.

## Usage

You can move around this project using the URL to see the other views that it has to offer
To see the views please use the following URLs
http://localhost:8000/index
http://localhost:8000/list

In the index view you will see the chart with the data given to it, after doing the installation procedure
you can hover your mouse on the pointers to see more information regarding the year and the population amount

In the list view you can see the same data shown on the chart but on a list format with the headers of nation, year and population in order by their id also shown in order of most recent to oldest.

Note:
If you use a different URL you will get an error as the route and view arent created for those.
It is recommended to add rows on to your database manually before running the project as it can show an error that the data is not there, since the command to send data to the DB wasnt able to respond properly when testing but once you have some entries you will said data displayed as normal.

## Made by

Marco Antonio Lopez Jaco

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
