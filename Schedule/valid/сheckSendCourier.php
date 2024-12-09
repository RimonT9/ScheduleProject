<?php

$region = htmlspecialchars(trim($_POST['region']));
$exit = htmlspecialchars($_POST['exit']);
$courier = htmlspecialchars(trim($_POST['courier']));
$arrival = htmlspecialchars($_POST['arrival']);

$messOnTheWay = "В данную область уже отправлен курьер";

if(isset($_COOKIE['Saint_Petersburg']) && $region == 'Санкт-Петербург'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Ufa']) && $region == 'Уфа'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Nizhniy_Novgorod']) && $region == 'Нижний Новгород'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Vladimir']) && $region == 'Владимир'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Kostroma']) && $region == 'Кострома'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Ekaterinburg']) && $region == 'Екатеринбург'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Kovrov']) && $region == 'Ковров'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Voronezh']) && $region == 'Воронеж'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Samara']) && $region == 'Самара'){
    echo $messOnTheWay;
    exit;
}
else if(isset($_COOKIE['Astrakhan']) && $region == 'Астрахань'){
    echo $messOnTheWay;
    exit;
}

$errorValid = "Заполните все данные";

if ($region == ''){
    echo $errorValid;
    exit;
}
else if ($exit == ''){
    echo $errorValid;
    exit;
}
else if ($courier == ''){
    echo $errorValid;
    exit;
}
else if ($arrival == ''){
    echo $errorValid;
    exit;
}

require "../lib/db.php";

$sql = 'INSERT INTO travel_schedule(`courier`, `region`, `exit`, `arrival`) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$courier, $region, $exit, $arrival]);

if($region == 'Санкт-Петербург')
    setcookie('Saint_Petersburg', $region, time() + 3600 * 96, '/');
else if($region == 'Уфа')
    setcookie('Ufa', $region, time() + 3600 * 120, '/');
else if($region == 'Нижний Новгород')
    setcookie('Nizhniy_Novgorod', $region, time() + 3600 * 72, '/');
else if($region == 'Владимир')
    setcookie('Vladimir', $region, time() + 3600 * 168, '/');
else if($region == 'Кострома')
    setcookie('Kostroma', $region, time() + 3600 * 168, '/');
else if($region == 'Екатеринбург')
    setcookie('Ekaterinburg', $region, time() + 3600 * 192, '/');
else if($region == 'Ковров')
    setcookie('Kovrov', $region, time() + 3600 * 120, '/');
else if($region == 'Воронеж')
    setcookie('Voronezh', $region, time() + 3600 * 96, '/');
else if($region == 'Самара')
    setcookie('Samara', $region, time() + 3600 * 72, '/');
else if($region == 'Астрахань')
    setcookie('Astrakhan', $region, time() + 3600 * 384, '/');
    
echo "Успешная отправка данных";

