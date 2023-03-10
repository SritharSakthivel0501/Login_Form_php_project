<?php

try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=loginForm","admin","welcome");
//     echo "hello";
}
catch(Exeption $e){
    die ($e->getMessage());
}
$edit_id = $_GET["editin"];


try{
    $edit=$pdo->prepare("SELECT * FROM users where users.id = $edit_id");
    $edit->execute();
    $edit = $edit->fetchAll($pdo::FETCH_OBJ);

}
catch (PDOException $e) {
    die($e->getMessage());
}


require'edit.html';
?>