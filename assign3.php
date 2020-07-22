<!DOCTYPE html>
<html>
<head><title>String assign 2</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="str" placeholder="Enter string.."><br><br>
        <input type="number" name="num" placeholder="enter 0..to..length-1"><br>
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['str'];
                $num = $_POST['num'];
                echo "Result :".substr($st,$num);
            }
        
        ?>
    </body>
</html>
