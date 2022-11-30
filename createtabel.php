<?php
include ('connection.php');
$sql = "CREATE TABLE STUDENTS (  
    ID INT                           NOT NULL,  
    NAME VARCHAR (20) NOT NULL,  
    AGE INT                         NOT NULL,  
    ADDRESS CHAR (25),  
    PRIMARY KEY (ID)  
    )";  

    if(mysqli_query($conn,$sql)){
        echo "table s7web created successful";

    } else {
        echo "error creating table".mysqli_error($conn);
    }


?>
