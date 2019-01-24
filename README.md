# iDeaFlix
This repo is implementaions test to ideaware.

### Requerimientos ###
* PHP >= 7.1.3
* Laravel >= 5.7
* Composer
* Git
* MySQL

### Installation ###

* `git clone https://github.com/Carlosferrerhernandez/ideaflix.git projectname`
* `cd projectname`
* `composer install`
* `cp .env.example .env`
* `php artisan key:generate`
* Add your database info in *.env*
* `php artisan vendor:publish`
* `php artisan migrate:refresh --seed` to create and populate tables
* `php artisan serve` to start the app one http:localhost:8000/

### Credits ###
* Carlos Ferrer
* Taylor Otwell (Creator of Laravel)