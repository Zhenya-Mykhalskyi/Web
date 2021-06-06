4<?php
session_start();
if(isset($_SESSION['entered'])){
    echo 'Your table';
}
else {
    echo 'failed';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контактна інформація</title>
</head>
<body>

<form method="post">
    <table  border="3" cellspacing="3" cellpadding="3" width="20%" bgcolor="blue" align="left">
        <tr>
            <td>Номер паспорта</td>
            <td><input type="text" name="number" value="<?php htmlspecialchars($_POST['number'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Хто видав</td>
            <td><input type="text" name="who" value="<?php htmlspecialchars($_POST['who'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Дата видачі</td>
            <td><input type="date" name="date" value="<?php htmlspecialchars($_POST['date'],ENT_QUOTES); ?>"></td>
        </tr>
         <tr>
             <td><input type="submit" value="Зберегти дані у файл"></td>
             <td><input type="submit" value="Вивести дані з файлу " name="add"></td>
         </tr>
    </table>
</form>
</body>
</html>

<?php
$number = $_POST['number'];
$who = $_POST['who'];
$date = $_POST['date'];

//створення файлу

$file = fopen("data.txt","a+t");
fwrite($file,htmlspecialchars($number) . "\n");
fwrite($file,htmlspecialchars($who) . "\n");
fwrite($file,htmlspecialchars($date) . "\n");

fclose($file);


//зчитування файлу
if(isset($_POST['add'])){
    $filename = "C:\OpenServer\OpenServer\domains\lab16\data.txt";
    $fileOpen = fopen($filename,"r");
    $contents = fread($fileOpen,filesize($filename));
    fclose($fileOpen);
    echo $contents;
}

?>