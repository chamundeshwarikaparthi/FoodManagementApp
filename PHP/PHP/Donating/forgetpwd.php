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
    $mno=$_POST['mno'];

   
$sql = "select *from donor where unm='$unm' and mno='$mno'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "LoginSuccessfully.";
        
        $sql_sel2="select *from donor where unm='$unm' and mno='$mno' ";
                            
	$res_sel2=mysqli_query($con,$sql_sel2);
	while($row_sel2=mysqli_fetch_array($res_sel2))
	{
	
                   $pwd= $row_sel2['pwd'];                       
                                           
                                           
                                           
        }


 $response["pwd"] =$pwd;

        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
} else {
 $response["success"] = 0;
        $response["message"] = "Login Fail.";
             echo json_encode($response);
  
}

mysqli_close($con);  ?>