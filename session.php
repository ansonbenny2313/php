<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
     session_start();
    ?>
</head>
<body>
<h1>welcome to sessions</h1>
    <?php
    echo "<p>my session id is ".session_id()."</p>";
    $_SESSION['id']='12345';

echo "session data sever path".session_save_path();
echo "<p>welcome iD".$_SESSION['id']."</p>";

?>
<a href="stop.php">stop session</a>

</body>
</html>