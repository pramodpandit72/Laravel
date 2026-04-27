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



php artisan make:view mylayout.header



php artisan make:mail WelcomeEmail

php artisan make:controller MailController

## For Database Model creation

php artisan make:model Item

php artisan config:clear
php artisan cache:clear
php artisan config:cache

php artisan session:table
php artisan migrate