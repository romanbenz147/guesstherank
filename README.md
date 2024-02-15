# Guesstherank
Guess the Rank application for Valorant using MySQL, PHP, HTML, CSS and JavaScript. <br>
<br>
A user can upload YouTube clips of his gameplay and other vistors can try to review that footage and try to guess the rank of the player. <br>

To run this site, you will need to install and run a SQL-Database (credentials down below) as well as an web server that can run PHP. The easiest way to do this is by using XAMPP (https://www.apachefriends.org/de/index.html)! <br>
<br>
THE SYSTEM FOR KEEPING TRACK OF A USERS POINTS IS EXPERIMENTIAL AND STILL IN DEVELOPMENT!

## SQL Credentials <br>
  // Servername: localhost <br>
  // Username: root (This may be different for you, but "root" is the default for XAMPP) <br>
  // Password: {empty} <br>
  // Database-Name: guesstherank valorant <br>

  You will have to create two tables inside your database: <br>
      ```CREATE TABLE `pointdb` (`id` int(11) NOT NULL,`sessionID` varchar(255) NOT NULL,`points` int(255) NOT NULL)```<br>
      ```CREATE TABLE `upload` (`id` int(11) NOT NULL,`username` varchar(50) NOT NULL,`rank` varchar(50) NOT NULL,`VideoID` varchar(50) NOT NULL)``` 
  
