<!DOCTYPE html>
<html>
<head><title>String assign 1</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="str" placeholder="Enter string..">
        <input type="submit" name="submit" value="Submit">
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['str'];
                $arr = str_split($st);
                $laststr = end($arr);
                echo "Result :".$laststr.$st.$laststr;
            }
        
        ?>
    </body>
</html>
