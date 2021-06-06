# Cindy's Life / MVC - OOP
* OOP Based MVC Implementation for Cindy's Life blog page.
* It's been created using PDO connection.
* This one has not deployed yet.

# How to Use on Local Machine
* Clone the repository, or download the zip file.
* Download the MAMP, XAMP or WAMP depends on your machine.
* There are several steps before you start these are;
* * Change the config.php file based on yourself. It must look like given below.
          <?php
                    define('DB_HOST', 'localhost');
                    define('DB_USER', '');
                    define('DB_PASS', '');
                    define('DB_NAME', 'admin');

                    define('APPROOT', dirname(dirname(__FILE__)));

                    define('URLROOT', 'http://localhost:8888/cindyslife');

                    define('SITENAME', "Cindy's Life");


# Notes

  * This is not the main blog web application because blog is for a real client who is my friend, so this my first project based OOP experience which means only for fun, and real project is using MySQLi connection.

  * Please do not be confused real blog web application being updated for a while even if I haven't updated to the existing repository in here.
