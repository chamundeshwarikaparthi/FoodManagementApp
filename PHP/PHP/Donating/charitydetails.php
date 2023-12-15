<?php

include 'database.php';
// Create connection

$did=$_POST['did'];

$unm=$_POST['unm'];

$sql1 = "select *from orders where did='$did'and unm='$unm' ";
  
      $resultt = mysqli_query($con, $sql1);
      
     
      
if (mysqli_num_rows($resultt) > 0) {

$response["details"] = array();
       
    while ($row1 = mysqli_fetch_array($resultt)) {
        // temp user array

      
        
        $cunm=$row1["cunm"];
        
        $sql_sel2="SELECT *FROM charity where unm='$cunm' ";
                            
	$res_sel2=mysqli_query($con,$sql_sel2);

	while($row_sel2=mysqli_fetch_array($res_sel2))
	{
	
	
	      $response["cunm"] = $row1["cunm"];
        
       $response["sts"] = $row1["status"];
        
            $response["cname"]=$row_sel2['name'];                       
                                           
            
              $response["mno"] = $row_sel2["mno"];
            
                $response["adrs"] = $row_sel2["adrs"];
            
            
                                   
                                           
        }
                  
 
           
         
         }
         
      
 $response["success"] = 1;
        
        $response["message"] = "Success.";
           //$response["sql"] =$sql1;
        // echoing JSON response
        echo json_encode($response);

   // echo "New record created successfully";
}  
else {


 
        $response["message"] = "No Record Found.";
      
         echo json_encode($response);
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);  ?>