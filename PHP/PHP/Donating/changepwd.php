<?php

include 'database.php';
// array for JSON response
$response = array();

// Create connection

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  
 
    $unm=$_POST['unm'];
    $newpwd=$_POST['newpwd'];
 $oldpwd=$_POST['oldpwd'];
   
$sql = "select *from donor where unm='$unm' and pwd='$oldpwd'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "LoginSuccessfully.";
        
        $sql_sel2="update donor set pwd='$newpwd' where unm='$unm'";
                            
	$res_sel2=mysqli_query($con,$sql_sel2);


        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
} else {
 $response["success"] = 0;
        $response["message"] = "Login Fail.";
             echo json_encode($response);
  
}

mysqli_close($con);  ?>