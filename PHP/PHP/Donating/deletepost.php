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
  
   $unm=$_POST['unm'];
   
      
   
       
$sql2= "delete from donating where did='$did' and unm='$unm' and status='wait'";
   
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