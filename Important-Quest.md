# 🎤 Laravel Viva Questions with Answers

---

# 🔹 Unit I – MVC & Basics

## ❓ What is MVC architecture?
MVC stands for Model-View-Controller.  
It is a design pattern used to separate an application into three parts:
- Model handles data and database  
- View handles UI  
- Controller handles logic  

This separation makes the application easy to manage and scalable.

---

## ❓ What is Laravel?
Laravel is a PHP framework used to build web applications.  
It follows MVC architecture and provides features like routing, Blade templating, Eloquent ORM, and security.

---

## ❓ What is Composer?
Composer is a dependency manager for PHP.  
It is used to install Laravel and manage external libraries required in the project.

---

## ❓ What is Artisan?
Artisan is Laravel’s command-line tool.  
It helps developers create files like controllers, models, run migrations, and perform various tasks easily.

---

## ❓ Explain Laravel directory structure.
Important folders:
- `app/` → Contains models and controllers  
- `routes/` → Defines routes  
- `resources/views/` → UI files  
- `public/` → Entry point  
- `database/` → Migrations and seeders  

---

# 🔹 Unit II – Request, Routing, Responses

## ❓ What is routing in Laravel?
Routing defines how URLs are handled.  
It connects a URL to a function or controller.

---

## ❓ What are route parameters?
Route parameters are used to pass dynamic values in URL.  
Example: `/user/{id}` where id is dynamic.

---

## ❓ What is request lifecycle?
It is the process of how Laravel handles a request:  
User → Route → Middleware → Controller → Response

---

## ❓ What is a view?
A view is used to display data to the user.  
It is created using Blade templates in Laravel.

---

## ❓ What is JSON response?
JSON response is used to return data in JSON format, mainly for APIs.

---

## ❓ What is redirection?
Redirection is used to send a user from one page to another after an action like form submission.

---

# 🔹 Unit III – Controllers, Blade, Routing

## ❓ What is a controller?
A controller handles application logic.  
It processes requests and returns responses.

---

## ❓ What is a resource controller?
A resource controller provides predefined methods for CRUD operations like index, store, update, and delete.

---

## ❓ What is middleware?
Middleware is used to filter requests before they reach the controller.  
Example: authentication check.

---

## ❓ What is Blade?
Blade is Laravel’s templating engine used to create dynamic views.

---

## ❓ What is template inheritance?
Template inheritance allows reuse of layout.  
A main layout is created and other views extend it.

---

## ❓ What are named routes?
Named routes are routes with a specific name, making them easy to reference.

---

# 🔹 Unit IV – Request Data, Emails, Sessions

## ❓ How do you get form data in Laravel?
Using `$request->input('field_name')`.

---

## ❓ What is old() function?
It is used to retain previous input values after validation fails.

---

## ❓ How does file upload work?
Files are accessed using `$request->file()` and stored using `store()` method.

---

## ❓ What are cookies?
Cookies store small data in the user’s browser.

---

## ❓ What is session?
Session stores user data temporarily on the server.

---

## ❓ What is localization?
Localization is used to support multiple languages in an application.

---

## ❓ How are emails sent in Laravel?
Emails are sent using the Mail class after creating a mail file using Artisan.

---

# 🔹 Unit V – Form Validation

## ❓ What is form validation?
Form validation is the process of checking user input before processing it.

---

## ❓ What is CSRF?
CSRF is a security feature that prevents unauthorized form submissions.

---

## ❓ What is @method directive?
It is used to send PUT, PATCH, DELETE requests through forms.

---

## ❓ What are validation rules?
Validation rules define conditions for input validation like required, email, numeric.

---

## ❓ What happens when validation fails?
User is redirected back with error messages and old input.

---

## ❓ What is custom validation?
Custom validation is used to define your own validation logic when built-in rules are not enough.

---

# 🔹 Unit VI – Database, Eloquent, APIs

## ❓ What is a model?
A model represents a database table and handles data operations.

---

## ❓ What are migrations?
Migrations are used to create and modify database tables.

---

## ❓ What is Query Builder?
Query Builder is used to perform database operations using SQL-like syntax.

---

## ❓ What is Eloquent ORM?
Eloquent ORM allows database interaction using object-oriented syntax.

---

## ❓ Difference between Eloquent and Query Builder?
- Eloquent → Object-oriented  
- Query Builder → SQL-based  

---

## ❓ What is seeding?
Seeding is used to insert dummy data into database.

---

## ❓ What is REST API?
REST API is used to build backend services that communicate using HTTP methods and return JSON data.

---

## ❓ What is apiResource?
It automatically creates API routes for CRUD operations.

---

# 🎯 Most Important Viva Questions (Must Prepare)

- MVC architecture  
- Request lifecycle  
- Eloquent vs Query Builder  
- Form validation  
- Middleware  
- Resource controller  
- Migrations  
- REST API  

---

# 🚀 Viva Tip

While answering:
- Start with definition  
- Explain in 2–3 lines  
- Give small example if possible  

Example:  
“Controller is used to handle logic. It receives request, processes it, and returns response.”

---