<script type="text/javascript" src="functions.js"></script>

<head>
<title>Calculations and Playing with JavaScript</title>
</head>

<h2>Do some derivatives :)</h2>

a<i>x</i><sup>b</sup>
<form method="post" action="index.php">
<input name="inputa" id="inputa" placeholder="Enter a">
<input name="inputb" id="inputb" placeholder="Enter b">
<input type="submit" name="submit" id="submit" value="Calculate Derivative">
<br><br>


<?php

function derivative($a, $b) {

	if( isset( $_POST["submit"] ) ) {
		$coefficient = $a * $b;
		$power = $b - 1;
		$answer = $coefficient . "<i>x</i><sup>" . $power . "</sup>" ;
		echo $answer;
	}
	
}

$a = $_POST['inputa'];
$b = $_POST['inputb'];



$original = "f(x) = $a<i>x</i><sup>$b</sup>";

if (is_numeric($a) && is_numeric($b)) {
	echo "Your original function was <b>$original</b><br>";
	echo "The derivative of $original calculated using the power rule, is <b>";
	derivative( $a, $b );


	echo "</b><br><br>Learn more about <a href='https://www.khanacademy.org/math/calculus/differential-calculus/power_rule_tutorial/v/power-rule'>power rule.</a>";

}else {
	echo "Please enter some numeric values";
}

?>

