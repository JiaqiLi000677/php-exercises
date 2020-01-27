<?php 
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 1;
while ($i<= 10) {
	# code...
	echo $i . "<br>";
	$i++;
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

for ($a=5; $a <=100 ; $a=$a+5) { 
	# code...
	echo $a . "<br>";
}




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Use while-loop to print array elements (every food in a new row).
*/

/*
Use for-loop to print array elements (every food in a new row).
*/

/*
Use foreach-loop to print array elements (every food in a new row).
*/
$food = ["pork ice-cream", "rib", "lamb", "beef salad"];
$counter = 0;
while ( $counter < sizeof($food)) {
  # code...
  echo $food[$counter] . "<br>";
  $counter++;
}
echo "<br>";

for ($b=0; $b < sizeof($food); $b++) { 
  # code...
  echo $food[$b] . "<br>";
}
echo "<br>";

foreach ($food as $key) {
  # code...
  echo $key . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";
for ($b=0; $b < sizeof($food); $b++) { 
  # code...
  echo "<li>" . $food[$b] . "</li>";
}
echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
"pork ice-cream", "rib", "lamb", "beef salad"
*/

$food_assoc = [
  "pork ice-cream" => [
    "type" => "dessert",
    "origin" => "UK"
  ],
  "rib" => [
    "type" => "main counrse",
    "origin" => "US"
  ],
  "lamb" => [
    "type" => "main counrse",
    "origin" => "CN"
  ],
  "beef salad" => [
    "type" => "salad",
    "origin" => "CA"
  ]
];
echo print_r($food_assoc);

$buffer = '<ul>';

foreach($food_assoc as $cat => $items) {
   $buffer .= "<li>$cat</li><ul>";
   foreach($items as $item) {
      if (strlen($item) <3) {
        $buffer .= "<li>" . array_keys($items)[1];
      } else {
        $buffer .= "<li>" . array_keys($items)[0];
      }
      $buffer .=  ' : ' .  $item . '</li>';      
   }
   $buffer .= '</ul>';
}

$buffer .= '</ul>';
echo $buffer;
?>