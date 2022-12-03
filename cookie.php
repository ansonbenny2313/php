<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie example</title>
    <?php
    setcookie("name",'hee',time()+3600,'/');
   
    ?>
</head>
<body>
   <h1>Welcome to cookies example</h1>
   <?php
    /*if(isset($_COOKIE('name'))){
        echo "<p> Welcome to".$_COOKIE['name']."</p>";
     }*/
    


   ?>
    
</body>
</html>