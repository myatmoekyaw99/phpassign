<!DOCTYPE html>
<html>
<head><title>String assign 5</title></head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="str" placeholder="Enter string..">
        <input type="submit" name="submit" value="Submit"><hr>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $st = $_POST['str'];
                $token = strtok($st," ");
                while ($token !== false)
                {
                    echo ucfirst("$token ");
                    $token = strtok(" ");
                }
            }
        
        ?>
    </body>
</html>
