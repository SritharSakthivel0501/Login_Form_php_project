<?php

try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=loginForm","admin","welcome");
}
catch(Exeption $e){ 
    die ($e->getMessage());
}

$name = $_POST["name"];
$Last_Name =$_POST["lastname"];
$Email = $_POST["email"];
$Website = $_POST["web"];
$Address = $_POST["Address"];
$Grender = $_POST["gender"];

if(
    $name && $Last_Name && $Email && $Website && $Address && $Grender
)
{
try{
    $query = $pdo->prepare("INSERT INTO users(name,last_name,email,website,address,gender)values('$name','$Last_Name','$Email','$Website','$Address','$Grender')");
    $query->execute();
    header("location: /index.html");
}
catch (PDOException $e) {
    die("connection error");
}
}