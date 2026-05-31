Question: 
Create a route/products that passes an array of products (products_info) to a view.
Each product should contain:

  * name
  * price

Display all products in a table format using Blade.

Apply a condition:
  * if price > 500 -> show "Expensive" Highlight expensive products in re color
  * Else -> Show "Afforadable" Highlight affordable products in green color


// php artisan route::list

// php artisan route::list --method=GET
// php artisan route::list --method=POST
// php artisan route::clear
// php artisan cache::clear
// php artisan make:controller MyController
// php artisan make:controller ResourseController --resource

## Types of Controller:-
1) Basic - used in form handling 
  * php artisan make:controller BasicController
  * Ist letter capital -BasicController is a class that will extends controller class
  * Form Handling

2) Resource - php artisan make:controller ResourceController --resource
   * Used for Database handling, CRUD Operation 
   * Inbuilt Methods - index(), create(), store(), show(), edit(), update(), destroy()
  
3) Api - php artisan make:controller APIController --api
   * API handling-Fetching the data from Api, Create your own API
   * Inbuild Methods - index, store, show, update, destroy
   
4) Invokable - php artisan make:controller InvokableController --invokable
   * inbuild method __invoke() 
   * Used for login/sign up authentication


## For creating file inside header folder
php artisan make:view mylayout.header



php artisan make:mail WelcomeEmail

php artisan make:controller MailController

## For Database Model creation

# php artisan make:model Item

php artisan config:clear
php artisan cache:clear
php artisan config:cache

php artisan session:table
php artisan migrate

## Make Controller and model Together
php artisan make:controller GroceryShop -m Item

## In musql we keep table as prular of 

#  php artisan session:table

## composer require mongodb/laravel-mongodb 

## composer diagnose

## Middleware -
1. Gloabal Middleware
2. Route Middleware
3. Group Middleware
   

# php artisan make:middleware AgeCheck 


enhancing customer outreach by using social media/p2p network"


## Thunderclient -> Tool to check API

## question: -
Create your oewn API with amd php artisan install:api using routes->api.php

Route for your API

Test API using thunderclient

Fetch data from any API using Http::get()

## Upload a file on server and display it on UI -

## php artisan storage:link

## php artisan --> This command shows all php commands in terminal

## composer create-project laravel/laravel project-name

# php artisan make:middleware globalmiddleware

# Question - 
Passing data to views
sharing data to views
app service provider
attaching headers
json response
redirect function 

named roures
controller routing

error message
customizing errormessage
repopulating form

Crud


