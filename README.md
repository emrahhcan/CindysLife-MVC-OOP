# Cindy's Life / MVC - OOP
* OOP Based MVC Implementation for Cindy's Life blog page.
* It's been created using PDO connection.
* This project will not been deployed.
* All passwords are hashed using PHP password hashing algorithm.

## How to See on Your Local Machine?
* Clone the repository, or download the zip file.
* Download the MAMP, XAMP or WAMP depends on your machine and interest.
* There are several steps before you start these are;
* * Change the config.php file based on yourself. It must look like given below (Do not forget to open php tag before the code below).

          define('DB_HOST', 'localhost'); // Localhost
          define('DB_USER', ''); // Your phpMyAdmin Username
          define('DB_PASS', ''); // Your phpMyAdmin password
          define('DB_NAME', 'admin'); // Exist DB in SQL folder

          define('APPROOT', dirname(dirname(__FILE__))); // Directory

          define('URLROOT', 'http://localhost:<your_port>/cindyslife'); // Mac uses 8888 as a PORT, You need to change based on your PORT.

          define('SITENAME', "Cindy's Life"); // Website name

* * After all;
* * * Compress the blog.sql file under the SQL folder
* * * Open localhost:<your_port>/phpMyAdmin, then click import button, and import the compressed SQL commands
* * Type "localhost:<your_port>/cindyslife" in URL part of your browser.
* * Now, you are ready to go

# Notes

  * This is not the main blog web application because blog is for a real client who is my friend, so this my first project based OOP experience using PHP which means this project is only for fun, and real project is using MySQLi connection
  * Furthermore, this project is created on template of Traversary Media's Udemy course
