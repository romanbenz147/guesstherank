<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>GuessTheRank Valorant</title>
</head>
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
    
         
        $mysqli = new mysqli("localhost","root","","guesstherank valorant");

        if ($mysqli->connect_error) {
            die('Connect Error (' .
            $mysqli->connect_errno . ') '.
            $mysqli->connect_error);
        }
         
        // SQL query to select data from database
        $sql = " SELECT * FROM upload ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $VideoID = substr($row["VideoID"], -11);
        $rank = $row["rank"]; 

        
        ?>
        <aside>
            <p>1</p>
        </aside>
        <div class="content">  
        <a class="titleb" href="/guesstherank"><h1>GuessTheRank Valorant</h1></a>
        <iframe src="https://www.youtube.com/embed/<?php echo $VideoID?>"  frameborder="0" width="1280" height="720"></iframe>
        <br>
        <form action="valorant.php">
        <select name="rankguess" id="rankguess">
            <option value="Iron">Iron</option>
            <option value="Bronze">Bronze</option>
            <option value="Silver">Silver</option>
            <option value="Gold">Gold</option>
            <option value="Platin">Platin</option>
            <option value="Diamond">Diamond</option>
            <option value="Ascendant">Ascendant</option>
            <option value="Immortal">Immortal</option>
            <option value="Radiant">Radiant</option>
        </select>
        <input type="submit" value="Submit">
        <?php
        
        ?>
        </form>
        </div>      
</body>
</html>