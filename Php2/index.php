
    
    <?php

        function printForm()
        {
            echo <<<HTML
            
            <form action="showIndex.php" method="POST">
                <p style="font-weight: 900;">Будь ласка введіть інформація про себе</p>
                <p>Поля є обов'язковими для заповнення</p>
                
                <table>
                    <tr>
                        <td>Ім'я*</td>
                        <td><input type="text" name="forName"></td>
                    </tr>
                    <tr>
                        <td>Прізвище*</td>
                        <td><input type="text" name="forSecondName" value=""></td>
                    </tr>
                    <tr>
                        <td>Email адреса*</td>
                        <td><input type="text" name="forEmail"></td>
                    </tr>
                    <tr>
                        <td>Поштовий інлекс*</td>
                        <td><input type="text" name="forIndex"></td>
                    </tr>
                    <tr>
                        <td>Улюьлений предмет</td>
                        <td><input type="text" name="forSubject"></td>
                    </tr>
                </table>
                
                <br>
                <input type="submit" name="done">
                
            </form>
            <link rel="stylesheet" href="style.css">
            
            HTML;
        }

        printForm();
    ?>
