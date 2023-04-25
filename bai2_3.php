
<?php
	$number = 12.34;
	
	settype($number, "integer");
	echo $number."<br/>";

	echo is_numeric("abc");
	define("PI",3.14);
	define("COURSE","PHP Training");
	echo PI."<br/>";
	echo COURSE;
?>