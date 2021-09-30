# GTL
GTL Tech assessment

This is a sample app for the API ofGTL Tech assessment using PHP.

This app was made using Laravel framework. Be sure to check their documentation.

Installation
First, you will need to install Composer following the instructions on their site.

Then, simply run the following command:

Clone the repository
$git clone https://github.com/wiahwajith/GTL.git

Switch to the repo folder

cd GTL

Install all the dependencies using composer

composer install


Configuration
create database named "gtl_db"

gtl_db

Make sure to define your database connection in .env, then run the provided migration:

DB_DATABASE=gtl_db

as in .env.example

or just

DB_DATABASE=gtl_db


then 

php artisan migrate --seed


now can access project api publicly no need anu authentication.

Now you can test your app! Just set your redirect_uri to http://localhost:8000/ and run a PHP server:

php artisan serve
When you visit http://localhost:8000 you will be taken to default larvel welcome page page.

API Specification

now can access runner last run data endpoint API using runner id  here {runnerId}

/api/v1/runner/{runnerId}/form-data

Code overview
only one Dependencies

shalvah/laravel-jsend


Folders
app - Contains all the Eloquent models
app/Http/Controllers/Api/v1 - Contains all the api controllers
app/Http/Middleware - Contains the JWT auth middleware
app/Http/Requests/Api - Contains all the api form requests
database/factories - Contains the model factory for all the models
database/migrations - Contains all the database migrations
database/seeds - Contains the database seeder
routes - Contains all the api routes defined in api.php file





