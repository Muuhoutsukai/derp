<?php 

$age = "0";

if (isset($_GET["age"]))
{
	$age = $_GET["age"];
}

if ($age <= 17)
{
	echo "Jij mag niks";
}
elseif ($age >= 18 and $age <= 20)
{
	echo "Jij mag autorijden";
}
else
{
	echo "Jij mag motorrijden";
}

?>