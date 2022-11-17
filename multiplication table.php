<!DOCTYPE html>
<html>

<body>
	<center>

		<h3>
			Program to print multiplication<br>
			table of any number in PHP
		</h3>

		<form method="POST">
			Enter a number:
			<input type="text" name="number">
			
			<input type="Submit"
				value="Enter">
		</form>
        <?php
            if($_POST) {
	        $num = $_POST["number"];

	echo "<p>Multiplication Table of $num: </p>";
		
	for ($i = 1; $i <= 10; $i++) {
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p>
		");
	                            }
                        }
        ?>


	</center>
</body>

</html>


