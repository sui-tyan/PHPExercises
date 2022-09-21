<?php
echo "<table>";
	for ($multiplicand=1; $multiplicand <= 7; $multiplicand++) { 
		echo "<tr>\n";
		for ($multiplier=1; $multiplier <= 7; $multiplier++) { 
		   $result = $multiplier * $multiplicand;
		   echo "<td>$result</td>\n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>