<?php ?>
<!DOCTYPE>
<html>
    <head>
        <title></title>    
    </head>
    <body>
    <?php 
        $connection= mysqli_connect('localhost', 'root', '');

    if ($connection) {
            echo "connection made successfully <br>";
    }
    else { mysqli_connect_error();
        }

        $selected = mysqli_select_db($connection, "crud");

    if($selected) {
                echo "connection is selected";
            }        
    else {
            echo 'couldnt select db';
        }

    ?>
    </body>
</html>