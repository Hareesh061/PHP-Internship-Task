# It's a simple php task where I created registration and login page 

# User Registration Page (registration.php):

**Session Handling:**
It starts a session using session_start() to keep track of the user's login status.
If a user is already logged in (indicated by the presence of $_SESSION["user"]), it redirects them to the index.php page.


The registration form collects user information such as Full Name, Email, Phone, Address, Password, and Repeat Password.

Bootstrap classes are used for styling.


# PHP Form Handling:

1. After the form submission (if (isset($_POST["submit"]))), it retrieves the form data.
2. Performs various checks for empty fields, valid email format, password length, and password matching.
3. Queries the database to check if the provided email already exists.
4. If there are errors, it displays them in an alert message.
5. If no errors, it uses prepared statements to insert the user data into the users table, hashing the password before storage.
6. Displays a success message if the registration is successful.

# User Login Page (login.php)

**Session Handling:**
Destroys any existing sessions when accessing the registration page.

**HTML Form:**

Similar to the registration page, it collects user email and password for login.

# PHP Form Handling:

If the form is submitted, it destroys any existing sessions (logout) and redirects to the login page.

# User Dashboard (index.php):

**Session Handling:**
Checks if a user is not logged in (if (!isset($_SESSION["user"]))), it redirects them to the login page.

# HTML Display:

Displays a simple welcome message on successful login.
Includes a logout button that links to a logout script.

**Database Connection (database.php):**

Defines database connection parameters such as hostname, database user, password, and database name.
Connects to the database using mysqli_connect()


EX:


<img width="960" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/a4a0f9ea-b942-45ab-ae2c-f50f75d9904e">


<img width="960" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/1d9e3b60-4c6b-421f-83c8-d600301d8276">


<img width="960" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/d1c1d800-cd7f-4376-8107-d405340596af">

<img width="958" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/fe809195-07cd-4485-bffc-61b6077f69f2">

<img width="960" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/c356da68-1a26-46cc-a330-a31979bb4680">

<img width="959" alt="image" src="https://github.com/Hareesh061/PHP-Internship-Task/assets/90563881/3e14a0e5-4424-474e-b37a-45f75e66fbf8">


# happy coding,keep learning..!
 





