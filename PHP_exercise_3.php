<?php
$variable = 8;

print("Value is now $variable\n");
print("Add 2. Value is now " . ($variable+=2) . "\n");
print("Substract 4. Value is now " . ($variable-=4) . "\n");
print("Multiply 5. Value is now " . ($variable*=5) . "\n");
print("Divide by 3. Value is now " . ($variable/=3) . "\n");
print("Increment value by one. Value is now " . ++$variable . "\n");
print("Decrement value by one. Value is now " . --$variable . "\n");

?>