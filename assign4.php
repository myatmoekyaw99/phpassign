<!DOCTYPE html>
<html>
<head><title>String assign 3</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="str" placeholder="Enter string..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['str'];
                $arr = str_split($st);
                $laststr = end($arr);
                $fstr=substr($st,0,1);

                $len = strlen($st);
                $res=substr_replace($st,$laststr,0,1);
                $res1=substr_replace($res,$fstr,$len-1,1);

                echo "Result :".$res1;
            }
        
        ?>
    </body>
</html>
