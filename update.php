<?php

try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=loginForm","admin","welcome");
    // echo "hello";
}
catch(Exeption $e){ 
    die ($e->getMessage());
}


$id = $_POST['id_value'];
$editname = $_POST['editname'];
$editlastname = $_POST['editlastname'];
$editemail = $_POST['editemail'];
$editweb = $_POST['editweb'];
$editAddress = $_POST['editAddress'];
$editgender = $_POST['gender'];

try{
    $update=$pdo->prepare("UPDATE users SET name ='$editname',last_name='$editlastname',email='$editemail',website='$editweb',address='$editAddress',gender='$editgender' where id = $id");
    $update->execute();
    header("location: /grid.php");
    
    
}
catch (PDOException $e) {
    die($e->getMessage());
}




?>