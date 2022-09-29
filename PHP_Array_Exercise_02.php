
//First Problem
<?php

  print("Input the number of elements to be stored in the array:");
  $numElements = readline();

  $arr = array(0);
  $counter = 0;

  print("Input " . $numElements . " elements in the array:");
	for($i = 0; $i < $numElements; $i++){
	  print("\nElement - " . $i . " : ");
	  array_push($arr, readline());
	}
	
	array_shift($arr);
	
	for($i = 0; $i < $numElements; $i++){
	  for($j = $i+1; $j < $numElements; $j++){
	    print("\n" . $arr[$i] . " is equal to " . $arr[$j]);
	    if($arr[$i] == $arr[$j]){
	      $counter++;
	    }
	  }
	}
	
	print("\nTotal number of duplicate elements found in the array is : " . $counter);
	
?>


//Second Problem
<?php

  print("Input the number of elements to be stored in the array:");
  $numElements = readline();

  $arr = array(0);
  $counter = 0;
  $oddArr = array(0);
  $evenArr = array(0);

  print("Input " . $numElements . " elements in the array:");
	for($i = 0; $i < $numElements; $i++){
	  print("\nElement - " . $i . " : ");
	  array_push($arr, readline());
	}
	
	array_shift($arr);
	array_shift($evenArr);
	array_shift($oddArr);
	
	for($i = 0; $i < $numElements; $i++){
	  if($arr[$i] % 2 == 0){
	    array_push($evenArr, $arr[$i]);
	  } else {
	    array_push($oddArr, $arr[$i]);
	  }
	}
	print("\nThe Even elements are : ");
	for($i = 0; $i < count($evenArr); $i++){
	  print($evenArr[$i] . " ");
	}
	print("\nThe Odd elements are : ");
	for($i = 0; $i < count($oddArr); $i++){
	  print($oddArr[$i] . " ");
	}
	
?>


//Third Problem
<?php

  print("Input the number of elements to be stored in the array:\n");
  $numElements = readline();
  
  $arr = array(0);
  
  for($i = 0; $i < $numElements; $i++){
    array_push($arr, readline());
  }
  
  array_shift($arr);
  $frequency = array_count_values($arr);
  foreach ($frequency as $value => $count) {
    print("\n" . $value . " occurs " . $count . " times");
  }

?>