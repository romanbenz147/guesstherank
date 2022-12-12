<?php
$VideoID = $_POST["VideoID"];
$username = $_POST["username"];
$rank = $_POST["rank"];



$conn = new mysqli("localhost","root","","guesstherank valorant");
if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into upload(VideoID, username, rank)
    values(?,?,?)");
    $stmt->bind_param("sss", $VideoID, $username, $rank);
    $stmt->execute();
    echo "Succesfully uploaded!";
    $stmt->close();
    $conn->close();
}
?>