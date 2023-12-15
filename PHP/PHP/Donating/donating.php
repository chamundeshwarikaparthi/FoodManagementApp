<?php
// array for JSON response
include 'database.php';

$response = array();

// Create connection


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  
 

   
    $unm=$_POST['unm'];
   
    $dtype =$_POST['dtype'];
    
    $desc =$_POST['desc'];
    
   $qty =$_POST['qty'];
   
   $rtime =$_POST['rtime'];
   
    $date =$_POST['date'];
   
 $adrs =$_POST['adrs'];

$sql = "INSERT INTO donating(unm,dtype,descrptn,qty,receive,datee,adrs,status) VALUES('$unm','$dtype','$desc','$qty','$rtime','$date','$adrs','wait')";


if (mysqli_query($con, $sql)) {
        // successfully inserted into database
        $response["success"] = 1;
    
        $response["message"] = "Donating Successfully.";
      
  

        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);

}

mysqli_close($con);  ?>