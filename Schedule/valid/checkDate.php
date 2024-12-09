<?php

$date = htmlspecialchars($_POST['date']);

require "../lib/db.php";

if(isset($_COOKIE['Saint_Petersburg'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Saint_Petersburg']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Saint_Petersburg_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Ufa'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Ufa']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Ufa_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Nizhniy_Novgorod'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Nizhniy_Novgorod']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Nizhniy_Novgorod_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Vladimir'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Vladimir']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Vladimir_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Kostroma'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Kostroma']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Kostroma_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Ekaterinburg'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Ekaterinburg']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Ekaterinburg_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Kovrov'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Kovrov']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Kovrov_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Voronezh'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Voronezh']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Voronezh_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Samara'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Samara']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Samara_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Astrakhan'])){
    $sql = 'SELECT * FROM travel_schedule WhERE region = ? ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Astrakhan']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Astrakhan_arrival', $arrival, time() + 3600 , '/');
}

if (isset($_POST['submit']) && $date == ''){
    $sql = 'SELECT * FROM travel_schedule';
    $query = $pdo->prepare($sql);
    $query->execute();   
    $schedules = $query->fetchAll(PDO::FETCH_OBJ);
    setcookie('schedules', serialize($schedules), time() + 1 , '/');
}
else if($date !== '' && !isset($_POST['update'])){
    $sql = 'SELECT * FROM travel_schedule WhERE arrival = ?';          
    $query = $pdo->prepare($sql);
    $query->execute([$date]);   
    $schedules = $query->fetchAll(PDO::FETCH_OBJ);
    setcookie('schedules', serialize($schedules), time() + 1 , '/');
}
   
header('Location: /index.php');

