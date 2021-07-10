<?php

// create connection
$conn = new mysqli("localhost","root","","Project1");

   
    
// create the query statment 
$stat =mysqli_query($conn, "SELECT * FROM Robot_Direction ORDER by id DESC LIMIT 1");
// execute the query
$result = mysqli_fetch_row($stat);

echo $result[1];
echo"\n";



// close the statment and the connection
$stat->close();
$conn->close(); 



?>