<?php
// array for JSON response
include 'database.php';

$response = array();

// Create connection


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  
 
   $name=$_POST['name'];
   
    $unm=$_POST['unm'];
   
    $pwd =$_POST['pwd'];
   
    $mno =$_POST['mno'];
   
 $adrs =$_POST['adrs'];

$sql = "INSERT INTO donor VALUES('$name','$unm','$pwd','$mno','$adrs')";
$sql1="select *from donor where unm='$unm'";

$result = mysqli_query($con, $sql1);

if (mysqli_num_rows($result) > 0) {

 $response["success"] = 2;
        $response["message"] = "Aleady Exist.";
          echo json_encode($response);
        }
          else{
if (mysqli_query($con, $sql)) {
        // successfully inserted into database
        $response["success"] = 1;
    
        $response["message"] = "Registered Successfully.";
      
  

        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

mysqli_close($con);  ?>