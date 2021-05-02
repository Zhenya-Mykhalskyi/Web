<?php

    function confirmForm()
    {
        echo<<<HTML
            <p style="font-size:40px; font-weight:900;">Дякуємо дана інформація була успішно відправлена</p> <br>
            <p style="font-weight:900;">Контактна інформація<p>
        HTML;

       echo $_POST["forName"] . "<br>";
       echo $_POST["forSecondName"]. "<br>";
       echo $_POST["forEmail"]. "<br>";
       echo $_POST["forIndex"]. "<br>";
       echo $_POST["forSubject"]. "<br>";

    }
    
    function checkForm()
    {
        if($_POST["forName"]=="" | $_POST["forSecondName"]=="" | $_POST["forEmail"]=="" | $_POST["forIndex"]=="" | $_POST["forSubject"]=="" )
        {
            echo "Заповніть всі поля у формі <br>";
            echo "<a href='/'>Виправити<a>";
        } 
        else {
            confirmForm();
        }
    }
    checkForm();

?>