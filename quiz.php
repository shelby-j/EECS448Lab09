<?php
//quiz results

echo "<H1>Your results!</H1>";

$q1 = $q2 = $q3 = $q4 = $q5 = "";
$q1a = $q2a = $q3a = $q4a = $q5a = "";

$q1 = $_POST["1"];
$q2 = $_POST["2"];
$q3 = $_POST["3"];
$q4 = $_POST["4"];
$q5 = $_POST["5"];

$total = 0;

if($q1 == "50"){
	$q1a = "50 meters";
	$total++;
}
else if($q1 == "75"){
	$q1a = "75 meters";
}
else if($q1 == "25"){
	$q1a = "25 meters";
}
else if($q1 == "100"){
	$q1a = "100 meters";
}

if($q2 == "p"){
	$q2a = "Pacific Ocean";
	$total++;
}
else if($q2 == "at"){
	$q2a = "Atlantic Ocean";
}
else if($q2 == "ar"){
	$q2a = "Arctic Ocean";
}
else if($q2 == "i"){
	$q2a = "Indian Ocean";
}

if($q3 == "D"){
	$q3a = "Dr. Pepper";
}
else if($q3 == "M"){
	$q3a = "Mountain Dew";
}
else if($q3 == "P"){
	$q3a = "Pepsi";
}
else if($q3 == "C"){
	$q3a = "Coca-Cola";
	$total++;
}

if($q4 == "CF"){
	$q4a = "Coffee";
}
else if($q4 == "T"){
	$q4a = "Tea";
	$total++;
}
else if($q4 == "CC"){
	$q4a = "Coca-Cola";
}
else if($q4 == "M"){
	$q4a = "Milk";
}

if($q5 == "U"){
	$q5a = "United States";
}
else if($q5 == "I"){
	$q5a = "India";
}
else if($q5 == "J"){
	$q5a = "Japan";
}
else if($q5 == "C"){
	$q5a = "China";
	$total++;
}

$total = $total * 20;

echo "<p>1. How long is an olympic swimming pool:</p>";
echo "<p> You answered: " .$q1a. "<br>"; 
echo "<p> Correct answer: 50 meters </p>"; 
echo "<br>";
echo "<p>2. What is the name of the largest ocean:</p>";
echo "<p> You answered: " .$q2a. "<br>"; 
echo "<p> Correct answer: Pacific Ocean </p>"; 
echo "<br>";
echo "<p>3. What was the first soda in space:</p>";
echo "<p> You answered: " .$q3a. "<br>"; 
echo "<p> Correct answer: Coca-Cola </p>"; 
echo "<br>";
echo "<p>4. What is the most consumed manufactured drink in the world:</p>";
echo "<p> You answered: " .$q4a. "<br>"; 
echo "<p> Correct answer: Tea </p>"; 
echo "<br>";
echo "<p>5. Which country invented Ice Cream:</p>";
echo "<p> You answered: " .$q5a. "<br>"; 
echo "<p> Correct answer: China </p>"; 
echo "<br>";

echo "<p>You scored $total %! </p>";


?>