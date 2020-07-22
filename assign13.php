<!DOCTYPE html>
<html>
<head><title>String assign 12</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="number" name="num1" placeholder="Enter number.."><br><br>
        <input type="number" name="num2" placeholder="Enter number"><br><br>
        <input type="submit" name="submit" value="+">
        <input type="submit" name="submit" value="-">
        <input type="submit" name="submit" value="*">
        <input type="submit" name="submit" value="/">
        <hr>
    </form>
        <?php
            echo "Result : <br>";
            if(isset($_POST['submit'])){
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                
                switch($_POST['submit']){
                    case "+":
                        echo $n1+$n2;
                        break;
                    case "-":
                        echo $n1-$n2;
                        break;
                    case "*":
                        echo $n1*$n2;
                        break;
                    case "/":
                        echo $n1/$n2;
                        break;
                }
            
            }
        
        ?>
    </body>
</html>
