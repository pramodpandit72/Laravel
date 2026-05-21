# 📘 Laravel Notes – Part 1 (Unit I)

---

# 🔹 Unit I – Getting Started with MVC Laravel Framework

---

## ✅ What is MVC Framework?

MVC stands for **Model-View-Controller**. It is a design pattern used to organize web applications in a structured and maintainable way.

Instead of writing all code in one place, MVC separates the application into three parts.

---

### 🔸 1. Model (Data Layer)

The Model is responsible for:
- Handling **data**
- Interacting with the **database**
- Performing operations like:
  - Insert data
  - Fetch data
  - Update data
  - Delete data

👉 In Laravel, Models use **Eloquent ORM** to interact with the database.

📌 Example:
If you want to get all users from database:
- Model will run the query
- Return data to controller

---

### 🔸 2. View (Presentation Layer)

The View is responsible for:
- Displaying data to the user
- Creating UI using HTML, CSS, and Blade

👉 In Laravel, views are written using **Blade templating engine**.

📌 Example:
- Showing user profile page
- Displaying form

---

### 🔸 3. Controller (Logic Layer)

The Controller acts as a **middleman** between Model and View.

It is responsible for:
- Receiving user requests
- Processing logic
- Calling Model for data
- Returning View with data

📌 Example Flow:
1. User visits `/users`
2. Route calls controller
3. Controller fetches users from Model
4. Controller sends data to View
5. View displays data

---

### 🎯 Why MVC is Important?

- Separates logic, UI, and data  
- Makes code easy to understand  
- Helps in debugging  
- Improves reusability  
- Makes project scalable  

---

## ✅ Overview of Laravel Framework

Laravel is a **PHP web application framework** used to build modern and scalable web applications.

It provides built-in tools that make development faster and easier.

---

### 🔹 Key Features of Laravel (Explained)

#### 1. MVC Architecture
Laravel follows MVC, so your code remains clean and organized.

---

#### 2. Blade Templating Engine
Blade allows you to:
- Write dynamic HTML easily
- Use conditions and loops

📌 Example:
```blade
{{ $name }}
```

---

#### 3. Eloquent ORM
Eloquent allows database interaction using PHP instead of SQL.

📌 Example:
```php
User::all();
```

👉 No need to write raw SQL queries.

---

#### 4. Routing System
Routing helps map URLs to specific functions or controllers.

📌 Example:
```php
Route::get('/home', function () {
    return "Home Page";
});
```

---

#### 5. Artisan CLI
Artisan is Laravel’s command-line tool.

👉 Used for:
- Creating controllers, models
- Running server
- Running migrations

---

#### 6. Built-in Security
Laravel provides:
- CSRF protection
- Password hashing
- Protection against SQL injection

---

#### 7. Authentication System
Laravel provides ready-to-use login and registration systems.

---

## ✅ Introduction to Composer

Composer is a **dependency manager for PHP**.

---

### 🔹 Why Composer is Used?

- To install Laravel  
- To manage external libraries  
- To update packages automatically  

---

### 🔹 How Composer Works?

Composer uses a file called:
```
composer.json
```

👉 This file contains all dependencies of the project.

---

### 🔹 Important Composer Commands

#### Create Laravel Project
```bash
composer create-project laravel/laravel project-name
```

👉 Downloads and installs Laravel with all dependencies.

---

#### Install Dependencies
```bash
composer install
```

👉 Installs packages listed in `composer.json`.

---

#### Update Dependencies
```bash
composer update
```

👉 Updates all installed packages.

---

## ✅ Latest Composer Installation (Concept)

Steps:
1. Download Composer from official website  
2. Install it on system  
3. Verify installation:
```bash
composer -V
```

👉 Shows installed version.

---

## ✅ Latest Laravel Installation

### Steps:

#### Step 1: Install Laravel
```bash
composer create-project laravel/laravel project-name
```

---

#### Step 2: Go to Project Folder
```bash
cd project-name
```

---

#### Step 3: Run Server
```bash
php artisan serve
```

👉 Output:
```
http://127.0.0.1:8000
```

---

## ✅ Directory / Application Structure (Detailed)

Understanding this is very important for exams.

---

### 🔸 1. app/
- Contains core logic
- Includes:
  - Models
  - Controllers
  - Middleware

---

### 🔸 2. routes/
- Contains route files:
  - `web.php` → Web routes
  - `api.php` → API routes

---

### 🔸 3. resources/
- Contains frontend files:
  - Views (Blade templates)
  - CSS, JS

---

### 🔸 4. public/
- Entry point of application
- Contains:
  - `index.php`
- All requests go through this folder

---

### 🔸 5. database/
- Contains:
  - Migrations (table structure)
  - Seeders (dummy data)

---

### 🔸 6. config/
- Contains configuration files
- Used to manage app settings

---

## ✅ Artisan (Detailed Explanation)

Artisan is Laravel’s **command-line interface (CLI)** tool.

---

### 🔹 Why Artisan is Important?

- Saves time
- Automates tasks
- Reduces manual coding

---

### 🔹 What Can Artisan Do?

- Create controllers
- Create models
- Run migrations
- Start server
- Manage cache

---

### 🔹 Example Commands

#### Start Server
```bash
php artisan serve
```

---

#### List Commands
```bash
php artisan list
```

---

#### Help Command
```bash
php artisan help serve
```

---

### 🎯 Conclusion of Unit I

In this unit, you learned:
- MVC architecture (very important concept)
- Laravel features
- Composer usage
- Laravel installation process
- Project structure
- Artisan CLI basics

👉 This unit builds the **foundation of Laravel**, so understanding it clearly is very important.

---

