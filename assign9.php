<!DOCTYPE html>
<html>
<head><title>String assign 8</title></head>
    <body>
        <?php
            echo ("<table style='border:1px solid;'>");
            for($i=1;$i<=100;$i++){
                echo("<tr>");
                for($j=1;$j<=10;$j++){
                    echo("<td style='border:1px solid;'>".$i*$j."</td>");
                }
                echo("</tr>");
            }
            echo("</table>");

        ?>
    </body>
</html>