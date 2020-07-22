<!DOCTYPE html>
<html lang="en">
<head>
    <title>String assign 9</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="txt" placeholder="Enter number string..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $st = $_POST['txt'];
            $len=strlen($st);
            $res = str_split($st);
            sort($res);
            $total=0;
            foreach($res as $val){
                $total+=$val;
            }
            echo "Average :".$avge=$total/$len;
            list($a,$b)=$res;
            echo "<br>Two minimum numbers : ".$a.",".$b;
            rsort($res);
            list($c,$d)=$res;
            echo "<br>Two maximum numbers : ".$c.",".$d;
            
        }
    ?>
</body>
</html>