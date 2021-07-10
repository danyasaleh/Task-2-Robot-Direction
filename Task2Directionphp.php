<?php

//bring slider values
  

$directions= $_POST["direction"];



// create connection
$conn = new mysqli("localhost","root","","Project1");

   
    
// create the query statment 
$stat = $conn->prepare("insert into Robot_Direction (direction) values (?)");

// define the type 
$stat->bind_param("s",$directions);

// execute the query
$stat->execute();

echo"data entered ";
    

// close the statment and the connection
$stat->close();
$conn->close(); 

?>