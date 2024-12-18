<?php

$date = htmlspecialchars($_POST['date']);

require "../lib/db.php";

if(isset($_COOKIE['Saint_Petersburg'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Saint_Petersburg']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Saint_Petersburg_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Ufa'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Ufa']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Ufa_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Nizhniy_Novgorod'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Nizhniy_Novgorod']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Nizhniy_Novgorod_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Vladimir'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Vladimir']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Vladimir_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Kostroma'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Kostroma']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Kostroma_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Ekaterinburg'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Ekaterinburg']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Ekaterinburg_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Kovrov'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Kovrov']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Kovrov_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Voronezh'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Voronezh']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Voronezh_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Samara'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Samara']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Samara_arrival', $arrival, time() + 3600 , '/');
}
if(isset($_COOKIE['Astrakhan'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id` WhERE region = ? 
    ORDER BY region DESC LIMIT 1';          
    $query = $pdo->prepare($sql);
    $query->execute([$_COOKIE['Astrakhan']]);   
    $schedule = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($schedule as $el)
    $arrival = $el->arrival;

    setcookie('Astrakhan_arrival', $arrival, time() + 3600 , '/');
}

if (isset($_POST['submit']) && $date == ''){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region`, `couriers`.`courier` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id`
    INNER JOIN `couriers` ON `travel_schedule`.`courier_id` = `couriers`.`id`';
    $query = $pdo->prepare($sql);
    $query->execute();   
    $schedules = $query->fetchAll(PDO::FETCH_OBJ);
    setcookie('schedules', serialize($schedules), time() + 1 , '/');
}
else if($date !== '' && !isset($_POST['update'])){
    $sql = 'SELECT `travel_schedule`.*, `regions`.`region`, `couriers`.`courier` FROM `travel_schedule` 
    INNER JOIN `regions` ON `travel_schedule`.`region_id` = `regions`.`id`
    INNER JOIN `couriers` ON `travel_schedule`.`courier_id` = `couriers`.`id` WhERE arrival = ?';          
    $query = $pdo->prepare($sql);
    $query->execute([$date]);   
    $schedules = $query->fetchAll(PDO::FETCH_OBJ);
    setcookie('schedules', serialize($schedules), time() + 1 , '/');
}
   
header('Location: /index.php');

