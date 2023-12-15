<?php

include 'database.php';
// Create connection

$unm=$_POST['unm'];

  $sql1 = "select *from donating where status='wait' and unm='$unm'  ";
  
      $resultt = mysqli_query($con, $sql1);
      
     
      
if (mysqli_num_rows($resultt) > 0) {

$response["details"] = array();
       
    while ($row1 = mysqli_fetch_array($resultt)) {
        // temp user array

       $pnames["did"] = $row1["did"];
        
        $pnames["unm"] = $row1["unm"];
        
        $unm=$row1["unm"];
        
        $sql_sel2="SELECT *FROM donor where unm='$unm' ";
                            
	$res_sel2=mysqli_query($con,$sql_sel2);

	while($row_sel2=mysqli_fetch_array($res_sel2))
	{
	
                   $mno=$row_sel2['mno'];                       
                                           
                                           
                                           
        }
                  
 
            $pnames["type"] = $row1["dtype"];
            
            $pnames["desc"] = $row1["descrptn"];
            
            $pnames["qty"] = $row1["qty"];
            
            $pnames["receive"] = $row1["receive"];
            
            $pnames["date"] = $row1["datee"];
            
            $pnames["adrs"] = $row1["adrs"];
            
             $pnames["mno"] = $mno;
            
            array_push($response["details"], $pnames);
         
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