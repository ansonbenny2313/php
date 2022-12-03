<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="inserttable.php" method="post">
        <input type="text" name="id" placeholder="enter id">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="address" name="address" placeholder="address">
        <input type="submit" value="register" name="register">
        

    </form>

    <center>
        <h1>User details</h1>
        <table border="borders">
    
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
            <?php
            /* $sql= "SELECT id,name,age,address FROM student";
             $result= mysqli_query($conn,$sql);
             echo mysqli_num_rows($result);
             
             while($row=mysqli_fetch_assoc($result));
            echo  " <tr>
                 <td>".$row['id']."</td>
                 <td>".$row['name']."</td>
                 <td>".$row['age']."</td>
                 <td>".$row['address']."</td>
            </tr>"
            */
            ?> 
                    
    
        </table>
        <h1> Search by Email</h1>
        <form action="registeration.php" method="post">
            <input type="text" name="searchage" placeholder="Age search">
            <input type="submit" value="search" name="search">
        </form>
        <?php

        if(isset($_POST['Search'])){
            $searchage=$_POST['searchage'];
            $sql="SELECT id,name,age from student where age='$searchage'";

        }
       
        ?>
         <table border="borders">
    
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        </tr>
        <?php
        $sql= "SELECT id,name,age,address FROM student";
        //$result= mysqli_query($conn,$sql);
       // echo mysqli_num_rows($result);
     
       // while($row=mysqli_fetch_assoc($result))
        echo  " <tr>
         <td>".$row['id']."</td>
         <td>".$row['name']."</td>
         <td>".$row['age']."</td>
         <td>".$row['address']."</td>
         </tr>";
         ?>

</center>
  
  
</body>


</html>