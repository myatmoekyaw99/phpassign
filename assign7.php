<!DOCTYPE html>
<html>
<head><title>String assign 6</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="number" name="num" placeholder="Enter number..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['num'];
                $res = 1;

                if($st==0){
                    echo "Result : 1";
                }else{
                    for($i=1;$i<=$st;$i++){
                        $res=$res*$i;
                    }
                echo "Result : ".$res;
                }
            }
        
        ?>
    </body>
</html>
