<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__
- Run __php artisan tinker__
- Run __User::factory()->count(20)->create()__
- Run __php artisan db:seed --class=MainSeeder__ 
- Use login __admin@admin.com__ and password __admin@admin.com__ for admin panel 
- Use login __client@client.com__ and password __client@client.com__ for client area 
- That's it

---

### Description

Simple project for tattoo studio. Can be used as a client and administrator.
The project includes functionalities such as PDF generator, middleware, seeders/factory,
full-calendar, flash messages, repository pattern, cruds for all Models.
The client can make reservations and send messages to the studio.
The administrator has the ability to manage clients, reservations, dates of meetings, the number of accessories, generate reports from a given period, create and update the content.