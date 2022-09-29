<?php

    $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    

    //sort
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($cities as $val) {
            print($val . ", ");
        }
    ?>

    <ul>
        <?php
            sort($cities);
                foreach ($cities as $res) {
                echo "<li>" . $res . "</li>";
            }
        ?>
    </ul>

    <?php

        array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    ?>

    <ul>
        <?php
            sort($cities);
                foreach ($cities as $res) {
                echo "<li>" . $res . "</li>";
            }
        ?>
    </ul>

</body>
</html>