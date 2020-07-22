<!DOCTYPE html>
<html>
<head><title>String assign 4</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="str" placeholder="Enter string..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['str'];
                $len = strlen($st);
                if($len>3){
                    $cut = substr($st,0,3);
                    echo "Result :".$cut.$st.$cut;
                }
            }
        
        ?>
    </body>
</html>
