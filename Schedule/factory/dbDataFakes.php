<?php

$scheduleArr = [
    [
        'courier' => 'Васьков Павел Радмирович',
        'region' => 'Санкт-Петербург',
        'exit' => '2000-12-01',
        'arrival' => '2000-12-5'
    ],
    [
        'courier' => 'Рамазанов Андрей Вячеславович',
        'region' => 'Уфа',
        'exit' => '2000-12-03',
        'arrival' => '2000-12-8'
    ],
    [
        'courier' => 'Громов Родион Русланович',
        'region' => 'Воронеж',
        'exit' => '2000-12-01',
        'arrival' => '2000-12-5'
    ],
    [
        'courier' => 'Назаров Артем Дмитриевич',
        'region' => 'Астрахань',
        'exit' => '2000-12-07',
        'arrival' => '2000-12-23'
    ],
    [
        'courier' => 'Ложков Виктор Ибрагомович',
        'region' => 'Самара',
        'exit' => '2001-01-02',
        'arrival' => '2001-01-5'
    ],
    [
        'courier' => 'Новиков Егор Славович',
        'region' => 'Кострома',
        'exit' => '2001-02-07',
        'arrival' => '2001-02-14'
    ],
    [
        'courier' => 'Щербаков Юрий Кириллович',
        'region' => 'Ковров',
        'exit' => '2000-12-20',
        'arrival' => '2000-12-25'
    ],
    [
        'courier' => 'Лебедев Николай Олегович',
        'region' => 'Владимир',
        'exit' => '2001-02-11',
        'arrival' => '2000-12-18'
    ],
    [
        'courier' => 'Глыбов Степан Алексеевич',
        'region' => 'Екатеринбург',
        'exit' => '2001-01-21',
        'arrival' => '2001-01-29'
    ],
    [
        'courier' => 'Соловьев Евпатий Коловратов',
        'region' => 'Нижний Новгород',
        'exit' => '2001-02-19',
        'arrival' => '2001-02-22'
    ],
    
];

$regions = [
    [
        'region' => 'Санкт-Петербург',
        'duration_days' => '4',
    ],
    [
        'region' => 'Уфа',
        'duration_days' => '5',
    ],
    [
        'region' => 'Нижний Новгород',
        'duration_days' => '3',
    ],
    [
        'region' => 'Владимир',
        'duration_days' => '7',
    ],
    [
        'region' => 'Кострома',
        'duration_days' => '7',
    ],
    [
        'region' => 'Екатеринбург',
        'duration_days' => '8',
    ],
    [
        'region' => 'Ковров',
        'duration_days' => '5',
    ],
    [
        'region' => 'Воронеж',
        'duration_days' => '4',
    ],
    [
        'region' => 'Самара',
        'duration_days' => '3',
    ],
    [
        'region' => 'Астрахань',
        'duration_days' => '16',
    ]

];

$couriers = [
    'Васьков Павел Радмирович',
    'Рамазанов Андрей Вячеславович',
    'Громов Родион Русланович',
    'Назаров Артем Дмитриевич',
    'Ложков Виктор Ибрагомович',
    'Новиков Егор Славович',
    'Щербаков Юрий Кириллович',
    'Лебедев Николай Олегович',
    'Глыбов Степан Алексеевич',
    'Соловьев Евпатий Коловратов'
];

require "../lib/db.php";

foreach($scheduleArr as $els)
{
    $obj = (object) $els;
    $courier = $obj->courier; 
    $region = $obj->region;
    $exit = $obj->exit;
    $arrival = $obj->arrival;

    $sql = 'INSERT INTO travel_schedule(`courier`, `region`, `exit`, `arrival`) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$courier, $region, $exit, $arrival]);
}

foreach($regions as $els)
{
    $obj = (object) $els;
    $region = $obj->region;
    $duration_days = $obj->duration_days;

    $sql = 'INSERT INTO regions(`region`, `duration_days`) VALUES(?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$region, $duration_days]);
}

foreach($couriers as $courier)
{
    $sql = 'INSERT INTO couriers(`courier`) VALUES(?)';
    $query = $pdo->prepare($sql);
    $query->execute([$courier]);
}


