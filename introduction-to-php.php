<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
 
$print1 = "Welcome to PHP!";
echo $print1;
 


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$task2 = '"Hypertext Preprocessor"';
echo "PHP stands for " . $task2 . "!";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
$task3 = '"Hypertext Preprocessor"';
echo "<p>PHP stands for " . $task3 . "!</p>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$task4 = "HTML - Stands for Hypertext Markup Language<br>";
$task4 .= "CSS - Stands for Cascading Stylesheet<br>";
$task4 .= "JS - Stands for JavaScript<br>";
$task4 .= "PHP - Stands for Hypertext Preprocessor<br>";
$task4 .= "SQL - Stands for Structural Query Language<br>";
echo $task4;
   

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$task5 = "<ul><li>HTML - Stands for Hypertext Markup Language</li>";
$task5 .= "<li>CSS - Stands for Cascading Stylesheet</li>";
$task5 .= "<li>JS - Stands for JavaScript</li>";
$task5 .= "<li>PHP - Stands for Hypertext Preprocessor</li>";
$task5 .= "<li>SQL - Stands for Structural Query Language</li></ul>";
echo $task5;

?>