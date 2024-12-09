<?php 

require "db.php";

$sql = 'SELECT * FROM regions';
    $query = $pdo->prepare($sql);
    $query->execute();   
    $regions = $query->fetchAll(PDO::FETCH_OBJ);

$sql = 'SELECT * FROM couriers';
    $query = $pdo->prepare($sql);
    $query->execute();   
    $couriers = $query->fetchAll(PDO::FETCH_OBJ);