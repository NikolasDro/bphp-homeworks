<?php
$timeNow = date("H");
$dayNow = date("N");

//$timeNow = 18;
//$dayNow = 6;

$firstHalf = '09:00';
$secondHalf = '10:00';
$endWork = '18:00';
$sunday = 'воскресенье';

$goodMorning = 'Доброе утро!';
$goodDay = 'Добрый день!';
$goodEvening = 'Добрый вечер!';
$goodNight = 'Доброй ночи!';

$today = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до ';
$tonight = 'Сегодня - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';
$tomorrow = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';
$dayAfter = 'Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';

$morningPict = 'https://cdn.pixabay.com/photo/2016/01/13/01/36/bagan-1137015_1280.jpg';
$dayPict = 'https://cdn.pixabay.com/photo/2017/12/26/02/58/vietnam-3039588_1280.jpg';
$eveningPict = 'https://cdn.pixabay.com/photo/2014/07/18/20/36/sunset-396633_1280.jpg';
$nightPict = 'https://cdn.pixabay.com/photo/2013/06/09/17/04/fire-123784_1280.jpg';

if ($dayNow == 1) {
    $weekday = 'понедельник';
} elseif ($dayNow == 2) {
    $weekday = 'вторник';
} elseif ($dayNow == 3) {
    $weekday = 'среда';
} elseif ($dayNow == 4) {
    $weekday = 'четверг';
} elseif ($dayNow == 5) {
    $weekday = 'пятница';
} elseif ($dayNow == 6) {
    $weekday = 'суббота';
} elseif ($dayNow == 7) {
    $weekday = 'воскресенье';
};

if ($timeNow >= 06 && $timeNow < 11) {
    $time = $goodMorning;
    $backpict = $morningPict;
} elseif ($timeNow >= 11 && $timeNow < 18) {
    $time = $goodDay;
    $backpict = $dayPict;
} elseif ($timeNow >= 18 && $timeNow < 23) {
    $time = $goodEvening;
    $backpict = $eveningPict;
} elseif ($timeNow >= 23 || $timeNow < 6) {
    $time = $goodNight;
    $backpict = $nightPict;
};

if ($timeNow >= 9 && $timeNow < 18 && $dayNow < 4) {
    $timeWork = "$today $endWork";
} elseif ($timeNow >= 10 && $timeNow < 18 && $dayNow > 3 && $dayNow < 7) {
    $timeWork = "$today $endWork";
} elseif ($timeNow >= 0 && $timeNow < 9 && $dayNow < 4) {
    $timeWork = "$tonight $firstHalf";
} elseif ($timeNow >= 0 && $timeNow < 10 && $dayNow > 3 && $dayNow < 7) {
    $timeWork = "$tonight $secondHalf";
} elseif ($timeNow >= 18 && $timeNow <= 23 && $dayNow < 4) {
    $timeWork = "$tomorrow $firstHalf";
} elseif ($timeNow >= 18 && $timeNow <= 23 && $dayNow > 3 && $dayNow < 5) {
    $timeWork = "$tomorrow $firstHalf";
} elseif ($dayNow == 6 && $timeNow >= 18) {
    $timeWork = "$dayAfter $firstHalf";
} elseif ($dayNow == 7) {
    $timeWork = "$tomorrow $firstHalf";
};




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>bPHP - 1.1.2</title>
</head>
<body style='background-image: url(<?=$backpict?>)'>
    <div class="content">
        <h2><?=$time?></h2>
        <hr>
        <p>Сегодня <?=$weekday?></p>
        <p><br></p>
        <p><?=$timeWork?></p>
    </div>
</body>
</html>