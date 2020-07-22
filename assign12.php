<!DOCTYPE html>
<html>
<head><title>String assign 11</title></head>
    <body>
        <?php
            $a=1;
            for($i=1;$i<=4;$i++){
                for($j=1;$j<=$i;$j++){
                    echo $a." ";
                    $a++;
                }
                echo "<br>";
            }
        ?>
    </body>
</html>