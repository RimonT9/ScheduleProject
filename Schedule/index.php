<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <script src="jquery-3.7.1.min.js"></script>
<script>
    function funcBefore()
    {
        $('#information').text("Отправка данных...");
    }

    function funcSuccess(data)
    {   
        $('input[type="text"],textarea').val('');
        $('input[type="date"],textarea').val('');
        $("#information").html(data); 
     
    }

    $(document).ready(function()
    {
        $("#done").bind("click", function()
        {
            $.ajax(
            {
                url: "valid/сheckSendCourier.php",
                type: "POST",
                data: 
                    ({
                        region: $('#region').val(),
                        exit: $('#exit').val(),
                        courier: $('#courier').val(),
                        arrival: $('#arrival').val()
                    }),
                dataType: "html",
                beforeSend: funcBefore,
                success: funcSuccess
            });
        });
    });
</script>
</head>
<body>
    <form action="" id ="cform">
    Регион:
    <div><input type="text" id="region" list="listRegions"></div><br>
    <datalist id="listRegions">
        <?php 
        require "lib/dbDataCourRegion.php";
        foreach($regions as $region):
        ?>
        <option value="<?php echo $region->region; ?>"></option> 
        <?php 
        endforeach;
        ?>
    </datalist>
    Дата выезда из Москвы:
    <div><input type="date" id="exit"></div><br>
    ФИО курьера:
    <div><input type="text" id="courier" list="listCouriers"></div><br>
    <datalist id="listCouriers">
        <?php 
        foreach($couriers as $courier):
        ?>
        <option value="<?php echo $courier->courier; ?>"></option> 
        <?php 
        endforeach; 
        ?>
    </datalist>
    Дата прибытия в регион:
    <div><input type="date" id="arrival"></div><br>
    <input type="button" id="done" value="Внести данные">
    <div id="information"></div>
    </form>
<?php
    error_reporting(E_ERROR | E_PARSE);

    $dataArrivals = [
        $_COOKIE['Saint_Petersburg_arrival'] => "Санкт-Петербург", 
        $_COOKIE['Ufa_arrival'] => "Уфа", 
        $_COOKIE['Nizhniy_Novgorod_arrival'] => "Нижний Новгород", 
        $_COOKIE['Vladimir_arrival'] => "Владимир", 
        $_COOKIE['Kostroma_arrival'] => "Кострома", 
        $_COOKIE['Ekaterinburg_arrival'] => "Екатеринбург", 
        $_COOKIE['Kovrov_arrival'] => "Ковров", 
        $_COOKIE['Voronezh_arrival'] => "Воронеж", 
        $_COOKIE['Samara_arrival'] => "Самара", 
        $_COOKIE['Astrakhan_arrival'] => "Астрахань"
    ];
?>
    <hr>
    <hr>
    <form action="valid/checkDate.php" method="post">
        <p>Вывод текущих поездок курьеров в регионы по дате прибытия:</p> 
        <input type="date" name="date" list="listArrivals">
            <datalist id="listArrivals">
                <?php 
                foreach($dataArrivals as $arrival => $city):
                ?>
                <option value="<?php echo $arrival; ?>"><?php echo $city ?></option> 
                <?php 
                endforeach;
                ?>
            </datalist>
        <input type="submit" name="submit" value="Вывести данные">
        <input type="submit" name="update" value="Обновить">
    </form>
    <hr>
    <hr>
<?php
    $schedules = unserialize($_COOKIE['schedules']);

    foreach($schedules as $schedule)
        echo 
            'Курьер: '.$schedule->courier."<br>".
            'Регион: '.$schedule->region."<br>".
            'Дата выезда: '.$schedule->exit."<br>".
            'Дата прибытия: '.$schedule->arrival."<br>".
            "<hr>";
?>
</body>
</html>