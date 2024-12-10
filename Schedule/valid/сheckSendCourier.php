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

$messСourIsBusy = "Курьер занят";

if(isset($_COOKIE['Vaskov']) && $courier == 'Васьков Павел Радмирович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Ramazanov']) && $courier == 'Рамазанов Андрей Вячеславович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Gromov']) && $courier == 'Громов Родион Русланович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Nazarov']) && $courier == 'Назаров Артем Дмитриевич'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Loshkov']) && $courier == 'Ложков Виктор Ибрагомович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Novikov']) && $courier == 'Новиков Егор Славович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Sherbakov']) && $courier == 'Щербаков Юрий Кириллович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Lebedev']) && $courier == 'Лебедев Николай Олегович'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Glibov']) && $courier == 'Глыбов Степан Алексеевич'){
    echo $messСourIsBusy;
    exit;
}
else if(isset($_COOKIE['Soloviev']) && $courier == 'Соловьев Евпатий Коловратов'){
    echo $messСourIsBusy;
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

if($courier == 'Васьков Павел Радмирович'){
    if($region == 'Санкт-Петербург')
        setcookie('Vaskov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
        setcookie('Vaskov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
        setcookie('Vaskov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
        setcookie('Vaskov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
        setcookie('Vaskov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
        setcookie('Vaskov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
        setcookie('Vaskov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
        setcookie('Vaskov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
        setcookie('Vaskov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
        setcookie('Vaskov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Рамазанов Андрей Вячеславович'){
    if($region == 'Санкт-Петербург')
    setcookie('Ramazanov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Ramazanov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Ramazanov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Ramazanov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Ramazanov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Ramazanov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Ramazanov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Ramazanov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Ramazanov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Ramazanov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Громов Родион Русланович'){
    if($region == 'Санкт-Петербург')
    setcookie('Gromov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Gromov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Gromov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Gromov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Gromov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Gromov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Gromov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Gromov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Gromov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Gromov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Назаров Артем Дмитриевич'){
    if($region == 'Санкт-Петербург')
    setcookie('Nazarov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Nazarov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Nazarov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Nazarov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Nazarov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Nazarov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Nazarov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Nazarov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Nazarov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Nazarov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Ложков Виктор Ибрагомович'){
    if($region == 'Санкт-Петербург')
    setcookie('Loshkov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Loshkov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Loshkov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Loshkov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Loshkov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Loshkov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Loshkov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Loshkov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Loshkov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Loshkov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Новиков Егор Славович'){
    if($region == 'Санкт-Петербург')
    setcookie('Novikov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Novikov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Novikov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Novikov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Novikov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Novikov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Novikov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Novikov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Novikov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Novikov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Щербаков Юрий Кириллович'){
    if($region == 'Санкт-Петербург')
    setcookie('Sherbakov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Sherbakov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Sherbakov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Sherbakov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Sherbakov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Sherbakov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Sherbakov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Sherbakov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Sherbakov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Sherbakov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Лебедев Николай Олегович'){
    if($region == 'Санкт-Петербург')
    setcookie('Lebedev', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Lebedev', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Lebedev', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Lebedev', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Lebedev', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Lebedev', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Lebedev', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Lebedev', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Lebedev', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Lebedev', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Глыбов Степан Алексеевич'){
    if($region == 'Санкт-Петербург')
    setcookie('Glibov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Glibov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Glibov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Glibov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Glibov', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Glibov', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Glibov', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Glibov', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Glibov', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Glibov', $courier, time() + 3600 * 384, '/');
}
else if($courier == 'Соловьев Евпатий Коловратов'){
    if($region == 'Санкт-Петербург')
    setcookie('Soloviev', $courier, time() + 3600 * 96, '/');
    else if($region == 'Уфа')
    setcookie('Soloviev', $courier, time() + 3600 * 120, '/');
    else if($region == 'Нижний Новгород')
    setcookie('Soloviev', $courier, time() + 3600 * 72, '/');
    else if($region == 'Владимир')
    setcookie('Soloviev', $courier, time() + 3600 * 168, '/');
    else if($region == 'Кострома')
    setcookie('Soloviev', $courier, time() + 3600 * 168, '/');
    else if($region == 'Екатеринбург')
    setcookie('Soloviev', $courier, time() + 3600 * 192, '/');
    else if($region == 'Ковров')
    setcookie('Soloviev', $courier, time() + 3600 * 120, '/');
    else if($region == 'Воронеж')
    setcookie('Soloviev', $courier, time() + 3600 * 96, '/');
    else if($region == 'Самара')
    setcookie('Soloviev', $courier, time() + 3600 * 72, '/');
    else if($region == 'Астрахань')
    setcookie('Soloviev', $courier, time() + 3600 * 384, '/');
}

if($region == 'Санкт-Петербург')
$region_id = 1;
else if($region == 'Уфа')
$region_id = 2;
else if($region == 'Нижний Новгород')
$region_id = 3;
else if($region == 'Владимир')
$region_id = 4;
else if($region == 'Кострома')
$region_id = 5;
else if($region == 'Екатеринбург')
$region_id = 6;
else if($region == 'Ковров')
$region_id = 7;  
else if($region == 'Воронеж')
$region_id = 8;   
else if($region == 'Самара')
$region_id = 9;  
else if($region == 'Астрахань')
$region_id = 10;

if($courier == 'Васьков Павел Радмирович')
$courier_id = 1;
else if($courier == 'Рамазанов Андрей Вячеславович')
$courier_id = 2;
else if($courier == 'Громов Родион Русланович')
$courier_id = 3;
else if($courier == 'Назаров Артем Дмитриевич')
$courier_id = 4;
else if($courier == 'Ложков Виктор Ибрагомович')
$courier_id = 5;
else if($courier == 'Новиков Егор Славович')
$courier_id = 6;
else if($courier == 'Щербаков Юрий Кириллович')
$courier_id = 7;  
else if($courier == 'Лебедев Николай Олегович')
$courier_id = 8;   
else if($courier == 'Глыбов Степан Алексеевич')
$courier_id = 9;  
else if($courier == 'Соловьев Евпатий Коловратов')
$courier_id = 10;

require "../lib/db.php";

$sql = 'INSERT INTO travel_schedule(`courier_id`, `region_id`, `exit`, `arrival`) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$courier_id, $region_id, $exit, $arrival]);
    
echo $messSuccess = "Успешная отправка данных";

