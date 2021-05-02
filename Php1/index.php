<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <form action="" method="POST">
        <label>Введіть значення змінних</label> <br> <br>
        <label>K = </label> <input type="text" name="valueOfKVar"> <br> <br>
        <label>D = </label> <input type="text" name="valueOfDVar"> <br> <br>
        <label>F = </label> <input type="text" name="valueOfFVar"> <br> <br>
        <input type="submit" name="done">
    </form>

    <?php
        if(isset($_POST["done"]))
        {
            if($_POST["valueOfDVar"]!="" and $_POST["valueOfKVar"]!="" and $_POST["valueOfFVar"]!="")
            {
                $part1 = pow(2.71,-1*$_POST["valueOfDVar"]);
                $ln = $_POST["valueOfDVar"]/$_POST["valueOfFVar"]; 
                $part2 = sqrt($_POST["valueOfFVar"]+$ln);
    
    
                echo "1.Результат = ";
                echo $part1*$part2 + $_POST["valueOfKVar"]; echo "</br>";
                
                echo "2.Результат = ";

                $part1 = cos($_POST["valueOfKVar"]+$_POST["valueOfDVar"]*$_POST["valueOfFVar"])* 
                        cos($_POST["valueOfKVar"]+$_POST["valueOfDVar"]*$_POST["valueOfFVar"]) + 3;
                
                $part2 = $_POST["valueOfFVar"]*$_POST["valueOfFVar"] + $_POST["valueOfKVar"]*($_POST["valueOfDVar"]+$_POST["valueOfFVar"]);
                
                echo  $part1/ $part2;
            }   
        }
    ?>
</body>
</html>