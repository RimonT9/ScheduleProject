<?php

$scheduleArr = [
    [
        'courier_id' => '1',
        'region_id' => '1',
        'exit' => '2000-12-01',
        'arrival' => '2000-12-5'
    ],
    [
        'courier_id' => '2',
        'region_id' => '2',
        'exit' => '2000-12-03',
        'arrival' => '2000-12-8'
    ],
    [
        'courier_id' => '3',
        'region_id' => '3',
        'exit' => '2000-12-01',
        'arrival' => '2000-12-5'
    ],
    [
        'courier_id' => '4',
        'region_id' => '4',
        'exit' => '2000-12-07',
        'arrival' => '2000-12-23'
    ],
    [
        'courier_id' => '5',
        'region_id' => '5',
        'exit' => '2001-01-02',
        'arrival' => '2001-01-5'
    ],
    [
        'courier_id' => '6',
        'region_id' => '6',
        'exit' => '2001-02-07',
        'arrival' => '2001-02-14'
    ],
    [
        'courier_id' => '7',
        'region_id' => '7',
        'exit' => '2000-12-20',
        'arrival' => '2000-12-25'
    ],
    [
        'courier_id' => '8',
        'region_id' => '8',
        'exit' => '2001-02-11',
        'arrival' => '2000-12-18'
    ],
    [
        'courier_id' => '9',
        'region_id' => '9',
        'exit' => '2001-01-21',
        'arrival' => '2001-01-29'
    ],
    [
        'courier_id' => '10',
        'region_id' => '10',
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

foreach($scheduleArr as $els)
{
    $obj = (object) $els;
    $courier_id = $obj->courier_id; 
    $region_id = $obj->region_id;
    $exit = $obj->exit;
    $arrival = $obj->arrival;

    $sql = 'INSERT INTO travel_schedule(`courier_id`, `region_id`, `exit`, `arrival`) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$courier_id, $region_id, $exit, $arrival]);
}

