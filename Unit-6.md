# 📘 Laravel Notes – Part 6 (Unit VI)

---

# 🔹 Unit VI – Getting Started with Databases

---

## ✅ Introduction to Database in Laravel

A database is used to **store application data permanently**.

👉 Examples:
- User details  
- Products  
- Orders  

Laravel provides multiple ways to interact with databases:
- Query Builder  
- Eloquent ORM  
- Migrations  
- Seeders  

---

## ✅ Model Creation (Detailed)

A Model represents a **database table**.

👉 Each model is connected to a table.

---

### 🔸 Create Model
```bash
php artisan make:model User
```

---

### 🔸 What Happens?

- A file is created:
```
app/Models/User.php
```

---

### 🔸 Example Model:
```php
class User extends Model {
    protected $table = 'users';
}
```

---

### 🎯 Why Models?

- Represent database tables  
- Handle data logic  
- Work with Eloquent ORM  

---

## ✅ Migrations (Detailed)

Migrations are used to **create and modify database tables**.

👉 Think of migrations as “version control for database”.

---

### 🔸 Create Migration
```bash
php artisan make:migration create_users_table
```

---

### 🔸 Example Migration:
```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});
```

---

### 🔸 Run Migration
```bash
php artisan migrate
```

👉 Creates tables in database

---

### 🔸 Rollback Migration
```bash
php artisan migrate:rollback
```

👉 Undo last migration

---

### 🎯 Why Migrations?

- Manage database structure  
- Track changes  
- Easy team collaboration  

---

## ✅ CRUD using Query Builder (Detailed)

Query Builder allows database operations using **SQL-like syntax**.

---

### 🔸 Insert Data
```php
DB::table('users')->insert([
    'name' => 'John',
    'email' => 'john@example.com'
]);
```

---

### 🔸 Read Data
```php
DB::table('users')->get();
```

---

### 🔸 Update Data
```php
DB::table('users')
    ->where('id', 1)
    ->update(['name' => 'Updated Name']);
```

---

### 🔸 Delete Data
```php
DB::table('users')
    ->where('id', 1)
    ->delete();
```

---

### 🎯 Why Query Builder?

- Simple syntax  
- No need to write raw SQL  
- Flexible queries  

---

## ✅ Seeding (Detailed)

Seeding is used to **insert dummy or test data into database**.

---

### 🔸 Create Seeder
```bash
php artisan make:seeder UserSeeder
```

---

### 🔸 Example Seeder:
```php
public function run() {
    DB::table('users')->insert([
        'name' => 'Test User',
        'email' => 'test@example.com'
    ]);
}
```

---

### 🔸 Run Seeder
```bash
php artisan db:seed
```

---

### 🎯 Why Seeding?

- Testing application  
- Populating database quickly  
- Demo data  

---

## ✅ Using MongoDB with Laravel (Concept)

Laravel mainly uses MySQL, but it can also work with MongoDB (NoSQL database).

---

### 🔸 Why MongoDB?

- Stores data in JSON format  
- Flexible schema  
- High performance for large data  

---

### 🔸 How to Use?

Install package:
```
jenssegers/laravel-mongodb
```

---

### 🎯 Use Case:
- Big data applications  
- Real-time systems  

---

## ✅ CRUD using Eloquent ORM (Detailed)

Eloquent ORM allows database operations using **object-oriented syntax**.

---

### 🔸 What is ORM?

ORM = Object Relational Mapping

👉 Converts database tables into PHP objects.

---

### 🔸 Read Data
```php
User::all();
```

---

### 🔸 Find Single Record
```php
User::find(1);
```

---

### 🔸 Insert Data
```php
User::create([
    'name' => 'John',
    'email' => 'john@example.com'
]);
```

---

### 🔸 Update Data
```php
$user = User::find(1);
$user->update(['name' => 'Updated']);
```

---

### 🔸 Delete Data
```php
$user = User::find(1);
$user->delete();
```

---

### 🎯 Why Eloquent ORM?

- Clean syntax  
- Object-oriented  
- Easy to read and maintain  

---

## ✅ Query Builder vs Eloquent ORM (Important)

| Feature | Query Builder | Eloquent ORM |
|--------|-------------|-------------|
| Syntax | SQL-like | Object-oriented |
| Complexity | Moderate | Easy |
| Performance | Faster | Slightly slower |
| Use Case | Complex queries | General CRUD |

---

## ✅ Implementing REST APIs (Detailed)

REST APIs are used to **build backend services for web/mobile apps**.

---

### 🔸 What is REST API?

REST (Representational State Transfer) is an architecture where:
- Data is transferred using HTTP methods
- Responses are usually in JSON format

---

### 🔸 Create API Routes
```php
Route::apiResource('users', UserController::class);
```

---

### 🔸 API Endpoints Created:

| Method | URL | Action |
|-------|-----|--------|
| GET | /users | Get all users |
| POST | /users | Create user |
| GET | /users/{id} | Get single user |
| PUT | /users/{id} | Update user |
| DELETE | /users/{id} | Delete user |

---

### 🔸 JSON Response Example:
```php
return response()->json([
    'name' => 'John'
]);
```

---

### 🎯 Why REST APIs?

- Connect frontend & backend  
- Used in mobile apps  
- Scalable architecture  

---

## 🎯 Final Conclusion of Unit VI

In this unit, you learned:

- Models and their role  
- Migrations and database structure  
- CRUD operations using Query Builder  
- Seeding for dummy data  
- MongoDB integration (concept)  
- Eloquent ORM (important)  
- REST API implementation  

---

## 🎯 Final Overall Understanding

### 🔸 Database Flow in Laravel:
Migration → Table Created → Model → Controller → Data Operations  

---

### 🔸 Key Learning:
- Always use **Eloquent for simplicity**  
- Use **Query Builder for complex queries**  
- Use **Migrations for database structure**  

---

# 🚀 Final Exam Advice

- Focus on:
  - Migrations  
  - Eloquent vs Query Builder  
  - CRUD operations  
  - API routes  

👉 This unit is **very important for practical + viva + coding exams**.

---