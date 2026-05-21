# 📘 Laravel Notes – Part 3 (Unit III)

---

# 🔹 Unit III – Controllers, Blade & Advanced Routing

---

## ✅ Controllers (Detailed Explanation)

Controllers are used to **handle application logic**.

Instead of writing logic inside routes, Laravel encourages us to use controllers to keep code clean and organized.

---

### 🔸 Why Use Controllers?

- Separates logic from routes  
- Makes code reusable  
- Improves readability  
- Follows MVC pattern properly  

---

### 🔸 Example Without Controller (Not Recommended)
```php
Route::get('/users', function () {
    return "User List";
});
```

👉 Logic is directly inside route → Not scalable

---

### 🔸 Example With Controller (Recommended)

```php
Route::get('/users', [UserController::class, 'index']);
```

👉 Now logic is inside controller method

---

### 🔸 Controller Method Example
```php
public function index() {
    return "User List";
}
```

---

## ✅ Creating Controllers

Controllers are created using Artisan:

```bash
php artisan make:controller UserController
```

👉 File will be created in:
```
app/Http/Controllers/
```

---

## ✅ Controller Routing (Detailed)

Controller routing connects routes to controller methods.

---

### 🔸 Example:
```php
Route::get('/users', [UserController::class, 'index']);
```

👉 When `/users` is accessed:
- `UserController`
- `index()` method is executed

---

### 🔸 Passing Parameters to Controller
```php
Route::get('/user/{id}', [UserController::class, 'show']);
```

Controller:
```php
public function show($id) {
    return $id;
}
```

---

## ✅ Controller Middleware

Middleware can be applied directly to controllers.

---

### 🔸 Example:
```php
public function __construct() {
    $this->middleware('auth');
}
```

👉 This ensures:
- Only authenticated users can access controller methods

---

### 🎯 Why Use Middleware in Controllers?

- Security  
- Access control  
- Request filtering  

---

## ✅ RESTful Resource Controllers (Detailed)

Resource controllers provide predefined methods for CRUD operations.

---

### 🔸 Create Resource Controller
```bash
php artisan make:controller UserController --resource
```

---

### 🔸 Methods Provided:

| Method   | Purpose |
|----------|--------|
| index()  | Display all records |
| create() | Show form to create data |
| store()  | Save new data |
| show()   | Display single record |
| edit()   | Show edit form |
| update() | Update existing record |
| destroy()| Delete record |

---

### 🔸 Route for Resource Controller
```php
Route::resource('users', UserController::class);
```

👉 Automatically creates all CRUD routes

---

### 🎯 Advantage:
- Saves time  
- Standard structure  
- Clean code  

---

# 🔹 Blade Templating Engine (Detailed)

Blade is Laravel’s **templating engine** used to create dynamic views.

---

## ✅ Creating Blade Templates

File extension:
```
.blade.php
```

👉 Example:
```
home.blade.php
```

---

## ✅ PHP Output in Blade

```blade
{{ $name }}
```

👉 Safely displays data (prevents XSS attack)

---

### 🔸 Raw Output (Unescaped)
```blade
{!! $html !!}
```

👉 Use carefully (security risk)

---

## ✅ Blade Directives (Detailed)

Blade provides special syntax called directives.

---

### 🔸 Conditional Statements

```blade
@if($age > 18)
    Adult
@else
    Minor
@endif
```

---

### 🔸 Loops

```blade
@foreach($users as $user)
    {{ $user->name }}
@endforeach
```

---

### 🔸 Include Files

```blade
@include('header')
```

👉 Used to reuse components

---

## ✅ Template Inheritance (Very Important)

Template inheritance allows you to reuse layouts.

---

### 🔸 Step 1: Create Layout

```blade
<!-- layout.blade.php -->
<html>
<body>
    @yield('content')
</body>
</html>
```

---

### 🔸 Step 2: Extend Layout

```blade
@extends('layout')

@section('content')
    <h1>Home Page</h1>
@endsection
```

---

### 🎯 Benefits:
- Avoid duplicate code  
- Maintain consistent UI  
- Easy updates  

---

# 🔹 Advanced Routing (Detailed)

Advanced routing provides more control over routes.

---

## ✅ Named Routes

Named routes allow assigning names to routes.

---

### 🔸 Example:
```php
Route::get('/home', function () {
    return "Home";
})->name('home');
```

---

### 🔸 Use Named Route
```php
route('home');
```

---

### 🎯 Advantage:
- No need to hardcode URLs  
- Easy maintenance  

---

## ✅ Secure Routes (Middleware Based)

Routes can be protected using middleware.

---

### 🔸 Example:
```php
Route::get('/dashboard', function () {
    return "Dashboard";
})->middleware('auth');
```

👉 Only logged-in users can access

---

## ✅ Parameter Constraints

Used to restrict route parameters.

---

### 🔸 Example:
```php
Route::get('/user/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');
```

👉 Only numeric values allowed

---

## ✅ Route Groups

Group multiple routes together.

---

### 🔸 Example:
```php
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
});
```

👉 URL becomes:
```
/admin/dashboard
```

---

### 🎯 Benefits:
- Clean organization  
- Avoid repetition  

---

## ✅ Route Prefixing

Prefix adds a common path to routes.

👉 Already shown in route groups

---

## ✅ Domain Routing

Used for handling subdomains.

---

### 🔸 Example:
```php
Route::domain('{account}.example.com')->group(function () {
    Route::get('/', function ($account) {
        return $account;
    });
});
```

👉 Example URL:
```
user1.example.com
```

---

## ✅ URL Generation (Detailed)

Laravel provides helpers to generate URLs.

---

### 🔸 Current URL
```php
url()->current();
```

👉 Returns current URL

---

### 🔸 Generate URL
```php
url('/home');
```

---

### 🔸 Generate Named Route URL
```php
route('home');
```

---

### 🔸 Asset URLs
```php
asset('css/style.css');
```

👉 Used for:
- CSS files  
- JS files  
- Images  

---

### 🔸 URL Generation Shortcuts

- `url()` → Basic URL  
- `route()` → Named route  
- `asset()` → Static files  

---

# 🎯 Conclusion of Unit III

In this unit, you learned:

- Controllers and their importance  
- Controller routing and middleware  
- Resource controllers (CRUD)  
- Blade templating system  
- Template inheritance  
- Advanced routing techniques  
- URL generation  

👉 This unit is very important for **practical coding + exams**.

---