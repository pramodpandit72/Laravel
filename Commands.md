composer create-project laravel/laravel project-name - create a new Laravel project with all dependencies  
composer install - install project dependencies from composer.json  
composer update - update all dependencies to latest versions  
composer dump-autoload - regenerate autoload files  

php artisan serve - start local development server  
php artisan list - display all available Artisan commands  
php artisan help serve - show help for a specific command  

php artisan make:controller UserController - create a new controller  
php artisan make:controller UserController --resource - create controller with CRUD methods  
php artisan make:controller Api/UserController --api - create API controller  

php artisan make:model User - create a model  
php artisan make:model User --migration - create model with migration  

php artisan make:migration create_users_table - create migration file  
php artisan migrate - run all pending migrations  
php artisan migrate:rollback - rollback last migration  
php artisan migrate:fresh - drop all tables and re-run migrations  

php artisan make:seeder UserSeeder - create seeder class  
php artisan db:seed - run all seeders  
php artisan db:seed --class=UserSeeder - run specific seeder  

php artisan make:middleware CheckUser - create middleware  

php artisan make:mail UserRegisteredMail - create mail class  

php artisan make:rule CustomRule - create custom validation rule  

php artisan route:list - display all routes  
php artisan route:clear - clear route cache  

php artisan cache:clear - clear application cache  
php artisan config:clear - clear configuration cache  
php artisan config:cache - cache configuration for faster performance  
php artisan view:clear - clear compiled view files  

php artisan storage:link - create symbolic link for storage  

php artisan tinker - interact with application using command line  

php artisan make:request StoreUserRequest - create form request validation class  
php artisan make:resource UserResource - create API resource class  

composer require mongodb/laravel-mongodb - install official MongoDB integration for Laravel (modern and recommended package)  