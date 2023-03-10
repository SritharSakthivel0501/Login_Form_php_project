<?php

try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=loginForm","admin","welcome");
    // echo "hello";
}
catch(Exeption $e){ 
    die ($e->getMessage());
}

try{
    $sql=$pdo->prepare("select * from users");
    $sql->execute();
    $users = $sql->fetchAll(PDO::FETCH_OBJ);
}
catch (PDOException $e) {
    die("connection fail");
}

require 'grid.html';

?>