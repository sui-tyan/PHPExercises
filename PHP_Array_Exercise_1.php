<?php
	$weather_conditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Exercise 1</title>
</head>
<body>
    <h1>PHP Array Exercise 1</h1>

    <?php 
        echo "We've seen all kinds of weather this month. At the beginnning of the month, we had " . $weather_conditions[5] . " and " . $weather_conditions[6] . ". Then came " . $weather_conditions[1] . " with a few " . $weather_conditions[2] . " and some " . $weather_conditions[0] . ". At least we didn't get any " . $weather_conditions[3] . " or " . $weather_conditions[4]. ".";
    ?>
    
</body>
</html>

