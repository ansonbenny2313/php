<?php

include ('connection.php');
$id =$_POST['id'];
$name= $_POST['name'];
$age = $_POST['age'];
$address= $_POST['address'];
$sql = "INSERT INTO students VALUES ('$id','$name','$age','$address')";
echo $sql;
if(mysqli_query($conn,$sql)){
    echo "<p>registred successfully</p>";
}
else {
    echo "<p> somthing went wrong</p>";
}

?>




