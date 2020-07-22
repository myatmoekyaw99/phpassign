<!DOCTYPE html>
<html>
<head><title>String assign 10</title></head>
    <body>
        <?php
            for($i=1;$i<=100;$i++){
                if ($i%3==0){
                    continue;
                }else{
                    echo $i.",";
                }
            }
        ?>
    </body>
</html>