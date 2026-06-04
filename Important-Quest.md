1.	a) Design a Laravel form that collects a user's name, age, and favorite programming language. Apply Laravel validation rules so that:
•	Name should contain only alphabets
•	Age must be 18 or above
•	Favorite programming language must be selected from a list (PHP, JavaScript, Python).
b) Extend the above form to store the submitted information in the database using an Eloquent model and display the stored records in a table format.

2.  a) Create a Laravel form validation system with the following conditions:
•   Username must contain at least 6 characters
•	Email must be unique in the database
•	Password must include one uppercase letter, one number, and one special character.
b) Implement a custom validation rule in Laravel to ensure that a selected date is not a weekend.

3.	a) Create a Laravel API resource controller to manage products. Implement methods to list, create, update, and delete products using Laravel API resource routes.
b) Demonstrate how to define and use a route group with middleware that allows access only to users with an "admin" role.
4.  a) Develop a Laravel authentication system that allows users to log in using either their email address or username. Apply suitable validation rules to verify the credentials.
b) Write a function that clears all session data when the user logs out, ensuring that a new session starts when the user logs in again.

5 . a) Demonstrate how to generate URLs dynamically in Laravel using the following helpers:
•	url() helper
•	route() helper
•	asset() helper for loading static resources.
b) Implement a feature that stores the user’s theme preference (light or dark mode) in a cookie and automatically applies the selected theme when the user revisits the website.



Q1. What is a Blade template in Laravel? Mention two advantages of using Blade over plain PHP templates.

---

Q2. Design a Laravel feature where:

A user uploads a file through a form.

The file is validated.

A confirmation email is sent to the user after successful upload.


Explain the flow of request handling including routes, controller logic, validation, and email sending.


---

Q3. Create a controller named StudentController with a method showStudents() that sends an array of student names to a Blade view and displays them using a loop.


---

Q4. Write a simple form in Laravel Blade to accept Name and Email, and implement basic validation rules for both fields.


---

Q5. You are building a Laravel application where only authenticated users should access the route /dashboard.

Explain how middleware can be used to secure this route.

Write:

The route definition

Middleware usage example



---

Q6. Explain the MVC Architecture used in Laravel.

Briefly describe the role of:

Model

View

Controller


in a web application.


---

Q7. A developer created a migration to build a students table but forgot to add timestamps.

Explain how to:

1. Create the migration.

2. Add columns:

id
name
email

timestamps

3. Run the migration.

4. Roll back the migration.

---

Q8. What is routing in Laravel?

Write the basic syntax of defining a route that returns a simple message.


---

Q9. Write a Laravel route that accepts a parameter name from the URL and passes it to a view to display the message:

"Welcome name"

Example:

/welcome/Aman

Output:

Welcome Aman


---

Q10. Explain how session data is:

Stored

Retrieved

Deleted


in Laravel.

Provide example code for each operation.


---

-- End of Question Paper --