<?php

try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=loginForm","admin","welcome");
    // echo "hello";
}
catch(Exeption $e){ 
    die ($e->getMessage());
}
$id = $_POST['deleteToId'];
// echo $id;
//DELETE from calculation where id = 1
try{
    $delete = $pdo->prepare("DELETE from users where users.id =$id");
    $delete -> execute();
    header("location: /grid.php");
    // echo "record deleted";
}
catch(PDOException $e){
    die("can't delete ".$e->getMessage());
}


require 'grid.html'
?>

