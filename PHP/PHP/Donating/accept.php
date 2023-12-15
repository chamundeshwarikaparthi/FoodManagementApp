<?php
// array for JSON response
include 'database.php';

$response = array();

// Create connection


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  
 
   $did=$_POST['did'];
   
    $cunm=$_POST['cunm'];
   
    $dunm =$_POST['dunm'];
   
   
      
$sql = "update donating set status='Accept' where did='$did'";
   
$result = mysqli_query($con, $sql);
   
$sql2 = "INSERT INTO orders VALUES('$did','$cunm','$dunm','Accept')";


$sql1="select *from orders where did='$did' and cunm='$cunm'";
$resultt = mysqli_query($con, $sql1);

if (mysqli_num_rows($resultt) > 0) {

 
 $sql1="delete from orders where did='$did' and cunm='$cunm'";
 
 $result2 = mysqli_query($con, $sql1);
        
        }
          
if (mysqli_query($con, $sql2)) {
        // successfully inserted into database
        $response["success"] = 1;
    
        $response["message"] = "Successfully.";
      
  

        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


mysqli_close($con);  ?>