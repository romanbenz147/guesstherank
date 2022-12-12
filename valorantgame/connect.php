<?php
if ($mysqli->connect_error) {
            die('Connect Error (' .
            $mysqli->connect_errno . ') '.
            $mysqli->connect_error);
        }
         
        // SQL query to select data from database
        $sql = " SELECT * FROM upload ORDER BY RAND() LIMIT 1";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $VideoID = substr($row["VideoID"], -11)
?>