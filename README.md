# guesstherank
Guess the Rank application for Valorant using MySQL, PHP, HTML, CSS and JavaScript.

To run this site, you will need to install and run a SQL-Database (credentials down below) as well as an web server that can run PHP. The easiest way to do this is by using XAMPP (https://www.apachefriends.org/de/index.html)!
THE SYSTEM FOR KEEPING TRACK OF A USERS POINTS IS EXPERIMENTIAL AND STILL IN DEVELOPMENT!

SQL Credentials:
  // Servername: localhost <br>
  // Username: root (This may be different for you, but "root" is the default for XAMPP) <br>
  // Password: {empty}
  // Database-Name: guesstherank valorant

  You will have to create two tables inside your database: 
      - One is called "pointdb". Create a column "id" of the type "int" with Autoimplement enabled (A.I). Create antother column "sessionID" of the type "varchar" (Using cookies or session ID's to keep track of the points a user has). Last, create a column "points" of the type int. 
  
