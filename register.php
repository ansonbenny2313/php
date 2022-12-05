<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include ('connection.php');
    ?>
    
    <form action="register.php" method="post">
       <input type="text" name="firstname" placeholder="Enter First Name"> 
       <input type="text" name="lastname" placeholder="Enter Last Name"> 
       <input type="email" name="email" placeholder="Enter Email"> 
       <input type="submit" value="Register" name="Register">

    </form>
    <?php
    if(isset($_POST['Register'])){
       
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

        if(mysqli_query($conn,$sql)){
            echo "<p>Registration Successfull</p>";
        }else{
            echo "<p>Somthing went wrong</p>";
        }
    }
    ?>
    <center>
        <h1>User Details</h1>
        <table border="border">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last name</th>
                <th>Email</th>
            </tr>
            <?php
            $sql = "SELECT id,firstname,lastname,email FROM MyGuests";
            $result = mysqli_query($conn,$sql);
            while($row= mysqli_fetch_assoc($result)){
               echo "<tr>
               <td>".$row['id']."</td>
               <td>".$row['firstname']."</td>
               <td>".$row['lastname']."</td>
               <td>".$row['email']."</td>
                </tr>" ;
            }
            ?>
            
        </table>

        <h1>Search By Email</h1>
        <form action="register.php" method="post">
            <input type="text" name="searchemail" placeholder="Email">
            <input type="submit" value="Search" name="Search">
        </form>
        <br>
        <br>
        <table border="border">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last name</th>
            </tr>
            <?php
            if(isset($_POST['Search'])){
                $searchemail = $_POST['searchemail'];
                $sql = "SELECT id,firstname,lastname from MyGuests WHERE email=?";
                $stmt = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt,'s',$searchemail);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                     </tr>" ; 
                }
            }
            ?>
        </table>
    </center>
</body>
</html>