//Задание 1
<br><br>

<?php
$name = 'olesy';
$b = 'Меня зовут:';
$c = $b.$name;
var_dump($c);
echo "<br><br>";
?>

<?php
$age = '34';
$b = 'Мне ';
$d = ' года';
$c = $b.$age.$d;
var_dump($c);
echo "<br><br>";
?>

//Если имя олеся выводить фамилию_имя
<br><br>

<?php
$name = 'olesy';
$fullname = 'astaschkina ';
$c = $fullname.$name;
if ($name == 'olesya') {
    echo $c;
}
var_dump($c);
echo "<br><br>";
?>


//Задание 2
<br><br>

<?php
$name2 = 'olesy';
$b = 'Меня зовут:';
$c = $b.$name2;
var_dump($c);
echo "<br><br>";
?>

<?php
$age2 = '34';
$b = 'Мне ';
$d = ' года';
$c = $b.$age2.$d;
var_dump($c);
echo "<br><br>";
?>

<?php
$name2 = 'olesy';
$c = 'Мне 34 года';
if ($name2 == 'olesya') {
    echo $c;
}
var_dump($c);
echo "<br><br>";
?>

//Имя 2 олеся вывод Ей 34 года
<br><br>

<?
$name2 = 'olesya';
$a = 'Ей 34 года';
echo (gettype($a));
echo "<br>";
echo "$a";
echo "<br><br>";
?>

//Задание 3
<br><br>

<?php
define("A1",8.5,true);
if (defined("A1")==true) echo A1;

echo "<br><br>";
?>

//Если константа верна, выводим "Верно"
<br><br>

<?php
define("A1",10,true);
if (defined("A1")==true) echo "Верно";

echo "<br><br>";

?>

//Задание 4
<br><br>

<?
$age4 = 100;
if ($age4 >= 18 && $age4 <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age4 > 65 && $age4 == 80) {
    echo "Вам пора на пенсию";
} elseif ($age4 == 1 && $age4 <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

echo "<br><br>";
?>

//Рабочий день
<br><br>

<?
$time = 0;
if ($time >= 9 && $time <=12) {
    echo "Вам еще работать и работать";
} elseif ($time == 13) {
    echo "Вам пора обедать";
} elseif ($time == 14 && $time <= 18) {
    echo "Скоро домой, крепись";
} else {
    echo "Свободное от работы время";
}
echo "<br><br>";
?>



//Задание 5
<br><br>

<?
switch ($day = 8) {
    case $day > 1 && $day <= 5:
        echo "Это рабочий день";
        break;
    case $day == 6 xor $day == 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "<br><br>";
?>

//Задание 6

<br><br>

<?
$A["bmw"]["model"]="x5";
$A["bmw"]["speed"]="120";
$A["bmw"]["doors"]="5";
$A["bmw"]["year"]="2015";
foreach ($A["bmw"] as $key => $value) {
    echo "<b>$key $value</b><br>";
}
echo "<br><br>";
?>

//Вариант написания 2
<br><br>

<?
$A["bmw"]= array ("model"=>"x5","speed"=>"120","doors"=>"5","year"=>"2015");
foreach ($A["bmw"] as $key => $value) {
    echo "<b>$key $value</b><br>";
}
echo "<br><br>";

?>
//Полная част 6 задания
<br><br>

<?php
$A["bmw"]= array ("model bmw"=>"x5","speed"=>"120","doors"=>"5","year"=>"2015");
foreach ($A["bmw"] as $key => $value) {
    echo "<b>$key $value</b><br>";
}
echo "<br><br>";

$B["toyota"] = array ("model toyota"=>"camry xv50","speed"=>"220","doors"=>"5","year"=>"2015");
foreach ($B["toyota"] as $key => $value) {
    echo "<b>$key $value</b><br>";
}
echo "<br><br>";

$C["opel"] = array ("model opel"=>"astra","speed"=>"150","doors"=>"5","year"=>"2016");
foreach ($C["opel"] as $key => $value) {
    echo "<b>$key $value</b><br>";
}
echo "<br><br>";
?>
