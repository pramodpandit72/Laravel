# 📘 Laravel Notes – Part 5 (Unit V)

---

# 🔹 Unit V – Laravel Form Validation

---

## ✅ Introduction to Form Validation

Form validation is the process of **checking whether user input is correct, complete, and secure before processing it**.

---

### 🎯 Why Validation is Important?

- Prevent invalid data from entering database  
- Improve application security  
- Ensure correct user input  
- Enhance user experience  

---

## ✅ CSRF Field (Detailed)

CSRF stands for **Cross-Site Request Forgery**.

It is a type of attack where unauthorized requests are sent on behalf of a user.

---

### 🔸 How Laravel Protects Against CSRF?

Laravel automatically generates a **CSRF token** for every session.

---

### 🔸 Usage in Forms:
```blade
<form method="POST">
    @csrf
</form>
```

👉 This adds a hidden token field.

---

### 🎯 Why CSRF is Important?

- Prevents unauthorized form submissions  
- Ensures request is coming from valid source  

---

## ✅ Method Field (Detailed)

HTML forms only support:
- GET
- POST

But Laravel supports:
- PUT
- PATCH
- DELETE

---

### 🔸 Solution: Method Field

```blade
@method('PUT')
```

---

### 🔸 Example:
```blade
<form method="POST">
    @csrf
    @method('PUT')
</form>
```

---

### 🎯 Why Method Field?

- Enables RESTful operations  
- Used for update and delete requests  

---

## ✅ Laravel Form Validation (Detailed)

Laravel provides a simple way to validate form data.

---

### 🔸 Basic Validation Example:

```php
$request->validate([
    'name' => 'required',
    'email' => 'required|email'
]);
```

---

### 🔸 What Happens Internally?

- If validation fails:
  - User is redirected back  
  - Error messages are generated  
  - Old input is preserved  

- If validation passes:
  - Execution continues  

---

### 🎯 Advantage:
- Less code  
- Built-in error handling  
- Secure validation  

---

## ✅ Validation Rules (Detailed Explanation)

Laravel provides many built-in validation rules.

---

### 🔸 Common Rules:

#### 1. required
Field must not be empty

```php
'name' => 'required'
```

---

#### 2. email
Must be valid email format

```php
'email' => 'email'
```

---

#### 3. numeric
Only numbers allowed

```php
'age' => 'numeric'
```

---

#### 4. min / max
Minimum or maximum value/length

```php
'password' => 'min:6'
```

---

#### 5. confirmed
Used for password confirmation

```php
'password' => 'confirmed'
```

👉 Requires `password_confirmation` field

---

#### 6. unique
Value must be unique in database

```php
'email' => 'unique:users'
```

---

### 🎯 Why Validation Rules?

- Ensure correct data format  
- Prevent invalid entries  
- Maintain data integrity  

---

## ✅ Error Messages (Detailed)

When validation fails, Laravel automatically generates error messages.

---

### 🔸 Display Errors in Blade:

```blade
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
```

---

### 🔸 Display Specific Field Error:

```blade
@error('name')
    <p>{{ $message }}</p>
@enderror
```

---

### 🎯 Why Error Messages?

- Inform user about mistakes  
- Improve form usability  

---

## ✅ Custom Validation Rules (Detailed)

Sometimes built-in rules are not enough.

Laravel allows creating custom validation rules.

---

### 🔸 Create Rule:
```bash
php artisan make:rule CheckAge
```

---

### 🔸 Define Logic:
```php
public function passes($attribute, $value) {
    return $value >= 18;
}
```

---

### 🔸 Use Rule:
```php
'age' => ['required', new CheckAge]
```

---

### 🎯 Use Cases:
- Custom business logic  
- Complex validation conditions  

---

## ✅ Repopulating Forms (Detailed)

When validation fails, Laravel sends old input back.

---

### 🔸 Example:
```blade
<input type="text" name="name" value="{{ old('name') }}">
```

---

### 🎯 Why Repopulation?

- Prevents data loss  
- Improves user experience  
- Avoids retyping  

---

## ✅ Complete Validation Flow (Understanding)

1. User submits form  
2. Request reaches controller  
3. Validation rules are applied  
4. If fails:
   - Redirect back  
   - Errors shown  
   - Old data preserved  
5. If passes:
   - Data is processed  

---

## 🎯 Real-Life Example

### Form:
```blade
<form method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">Submit</button>
</form>
```

---

### Controller:
```php
$request->validate([
    'name' => 'required',
    'email' => 'required|email'
]);
```

---

### Output:
- Valid → Data saved  
- Invalid → Errors shown  

---

# 🎯 Conclusion of Unit V

In this unit, you learned:

- What is form validation  
- CSRF protection  
- Method spoofing  
- Validation rules  
- Error handling  
- Custom validation rules  
- Repopulating forms  

👉 This unit is **very important for exams and practical coding**.

---