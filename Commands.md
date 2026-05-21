# 📘 Laravel Artisan Commands Cheat Sheet

## 🔹 Unit I – Setup & Basics

### Start Development Server
```bash
php artisan serve
```
Start the local Laravel development server.

---

### List All Commands
```bash
php artisan list
```
Display all available Artisan commands.

---

### Get Help for a Command
```bash
php artisan help serve
```
Show detailed help for a specific command.

---

## 🔹 Unit III – Controllers & Middleware

### Create Controller
```bash
php artisan make:controller UserController
```
Create a new controller class.

---

### Create Resource Controller (CRUD)
```bash
php artisan make:controller UserController --resource
```
Create a controller with CRUD methods (index, create, store, show, edit, update, destroy).

---

### Create API Controller
```bash
php artisan make:controller Api/UserController --api
```
Create a controller for API (without create/edit methods).

---

### Create Middleware
```bash
php artisan make:middleware CheckUser
```
Create a middleware class for request filtering.

---

## 🔹 Unit IV – Emails

### Create Mail Class
```bash
php artisan make:mail UserRegisteredMail
```
Create a mail class for sending emails.

---

## 🔹 Unit V – Validation

### Create Custom Validation Rule
```bash
php artisan make:rule CustomRule
```
Create a custom validation rule class.

---

## 🔹 Unit VI – Models, Database & APIs

### Create Model
```bash
php artisan make:model User
```
Create a new Eloquent model.

---

### Create Model with Migration
```bash
php artisan make:model User --migration
```
Create model along with migration file.

---

### Create Migration
```bash
php artisan make:migration create_users_table
```
Create a migration file for database table.

---

### Run Migrations
```bash
php artisan migrate
```
Execute all pending migrations (create tables).

---

### Rollback Migrations
```bash
php artisan migrate:rollback
```
Undo the last batch of migrations.

---

### Create Seeder
```bash
php artisan make:seeder UserSeeder
```
Create a seeder class for inserting dummy data.

---

### Run Seeders
```bash
php artisan db:seed
```
Run database seeders.

---

### Run Specific Seeder
```bash
php artisan db:seed --class=UserSeeder
```
Run a specific seeder class.

---

## 🔹 Extra Useful Commands (Exam + Practical)

### Clear Application Cache
```bash
php artisan cache:clear
```
Clear application cache.

---

### Clear Config Cache
```bash
php artisan config:clear
```
Clear configuration cache.

---

### Clear Route Cache
```bash
php artisan route:clear
```
Clear route cache.

---

### View All Routes
```bash
php artisan route:list
```
Display all registered routes.

---

### Create Storage Symlink
```bash
php artisan storage:link
```
Link storage folder to public directory.

---