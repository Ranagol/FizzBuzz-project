
<!DOCTYPE html>
<html>
<head>
	<title>FizzBuzz</title>
</head>
<body>
<h1>FizzBuzz</h1>
<p>Fizz buzz is a fairly common screening question to help sniff out non-programmers during the interview process. The task is to print out numbers 1 through 100 but for multiples of 3 print out “Fizz” instead of the number and for multiples of 5 print “Buzz” instead. If the number happens to be divisble by both 3 and 5 print out “FizzBuzz” instead of the number.</p>

<h3>Final solution</h3>
<?php 			

	for ($i=1; $i<=100 ; $i++) { 
	switch ($i) {
		case $i%3==0 && $i%5==0:
			echo "Fizz&Buzz, ";
			break;
		case $i%5==0:
			echo "Buzz, ";
			break;
		case $i%3==0:
			echo "Fizz, ";
			break;
		
		default:
			echo $i . ', ';
			break;
		}
	}


?>
</body>
</html>