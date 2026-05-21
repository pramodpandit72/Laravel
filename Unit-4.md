# 📘 Laravel Notes – Part 4 (Unit IV)

---

# 🔹 Unit IV – URL Generation, Request Data and Emails, Localization and Sessions

---

# 🔸 Part 1: URL Generation (Detailed)

URL generation is used to **dynamically create URLs in Laravel applications**.

Instead of hardcoding URLs, Laravel provides helper functions.

---

## ✅ Why URL Generation is Important?

- Avoid hardcoded links  
- Easy maintenance  
- Automatically updates URLs  
- Useful in large applications  

---

## ✅ Generating Basic URLs

```php
url('/home');
```

👉 Output:
```
http://yourdomain.com/home
```

---

## ✅ Generating Current URL

```php
url()->current();
```

👉 Returns the current page URL.

---

## ✅ Generating Previous URL

```php
url()->previous();
```

👉 Returns the last visited URL.

---

## ✅ Generating Named Route URLs

```php
route('home');
```

👉 Uses route name instead of writing full URL.

---

### 🔸 Example:
```php
Route::get('/home', function () {
    return "Home";
})->name('home');
```

---

## ✅ Asset URLs

Used for loading static files like CSS, JS, images.

```php
asset('css/style.css');
```

👉 Output:
```
http://yourdomain.com/css/style.css
```

---

## 🎯 Summary:
- `url()` → Generate URL  
- `route()` → Named route URL  
- `asset()` → Static files  

---

# 🔸 Part 2: Request Data (Detailed)

Request data refers to **data sent by user through forms or URLs**.

Laravel provides an easy way to access this data.

---

## ✅ Retrieving Request Data

### 🔸 Get Single Input
```php
$request->input('name');
```

👉 Returns value of `name` field.

---

### 🔸 Get All Input Data
```php
$request->all();
```

👉 Returns all form data as array.

---

### 🔸 Check if Input Exists
```php
$request->has('name');
```

👉 Returns true if field exists.

---

### 🔸 Default Value
```php
$request->input('name', 'Guest');
```

👉 If no input → returns "Guest"

---

## 🎯 Why Request Data is Important?

- Process form data  
- Handle user input  
- Build dynamic applications  

---

# 🔸 Part 3: Old Input (Detailed)

Old input is used to **retain previous form values after validation fails**.

---

## ✅ Example:

```blade
<input type="text" name="name" value="{{ old('name') }}">
```

👉 If validation fails:
- Previously entered value remains in form

---

## 🎯 Why Use Old Input?

- Improves user experience  
- Prevents data loss  
- Useful in forms  

---

# 🔸 Part 4: Uploaded Files (Detailed)

Laravel provides simple methods to handle file uploads.

---

## ✅ Access Uploaded File

```php
$request->file('image');
```

---

## ✅ Store File

```php
$request->file('image')->store('images');
```

👉 Stores file in:
```
storage/app/images
```

---

## ✅ Store File with Custom Name

```php
$request->file('image')->storeAs('images', 'file.jpg');
```

---

## 🎯 Why File Upload is Important?

- Upload profile pictures  
- Store documents  
- Handle media files  

---

# 🔸 Part 5: Cookies (Detailed)

Cookies store small data in the **user’s browser**.

---

## ✅ Create Cookie

```php
cookie('name', 'value', 60);
```

👉 Stored for 60 minutes

---

## ✅ Attach Cookie to Response

```php
return response('Hello')->cookie('name', 'value', 60);
```

---

## 🎯 Why Cookies?

- Store user preferences  
- Remember login details  
- Track user activity  

---

# 🔸 Part 6: Sending Emails (Detailed)

Laravel provides a powerful system to send emails.

---

## ✅ Steps to Send Email

### 1. Create Mail Class
```bash
php artisan make:mail UserMail
```

---

### 2. Configure Mail in `.env`

Example:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
```

---

### 3. Send Email

```php
Mail::to('user@example.com')->send(new UserMail());
```

---

## 🎯 Why Emails?

- User registration confirmation  
- Password reset  
- Notifications  

---

# 🔸 Part 7: Laravel Localization (Detailed)

Localization allows application to support **multiple languages**.

---

## ✅ Why Localization?

- Build multi-language apps  
- Improve user experience globally  

---

## ✅ Example:

### Language File:
```
resources/lang/en/messages.php
```

```php
return [
    'welcome' => 'Welcome'
];
```

---

### Access Translation
```php
__('messages.welcome');
```

👉 Output:
```
Welcome
```

---

## 🎯 Benefit:
- Easy language switching  
- Supports global users  

---

# 🔸 Part 8: Laravel Sessions (Detailed)

Sessions store **temporary data on server** for a user.

---

## ✅ Why Sessions?

- Store login information  
- Store user data temporarily  
- Maintain user state  

---

## ✅ Storing Session Data

```php
session(['name' => 'John']);
```

---

## ✅ Retrieving Session Data

```php
session('name');
```

---

## ✅ Check Session Exists

```php
session()->has('name');
```

---

## ✅ Deleting Session Data

```php
session()->forget('name');
```

---

## ✅ Flash Data (Temporary Session)

```php
session()->flash('status', 'Success');
```

👉 Available only for next request

---

## 🎯 Real-Life Use:
- Login session  
- Success messages  
- Shopping cart data  

---

# 🎯 Conclusion of Unit IV

In this unit, you learned:

- URL generation methods  
- Handling request data  
- Old input usage  
- File uploads  
- Cookies  
- Email sending system  
- Localization (multi-language support)  
- Session management  

👉 This unit is very important for **real-world applications + practical exams**.

---