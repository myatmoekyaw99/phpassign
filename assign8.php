<!DOCTYPE html>
<html>
<head><title>String assign 7</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="txt" placeholder="Enter number string..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['txt'];
                $res = str_split($st,2);
                echo "Result : ";
                foreach($res as $val){
                    echo $val.",";
                }
            }
        
        ?>
    </body>
</html>