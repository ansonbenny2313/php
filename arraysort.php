<!DOCTYPE html>
<html>

<body>
	<center>

		<h3>
			Program to print sorted array
		</h3>
	</center>

    <?php
$numbers = array(40, 61, 2, 22, 13);
echo "array: <br>";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

sort($numbers);
  echo "Ascending order <br>";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

rsort($numbers);
  echo "Descending order <br>";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

?>
</body>

</html>

