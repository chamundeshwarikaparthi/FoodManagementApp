<?php

include 'database.php';
// Create connection

$cunm=$_POST['cunm'];


  $sql1 = "select *from orders where status='Accept' and cunm='$cunm'  ";
  
      $resultt = mysqli_query($con, $sql1);
      
     
      
if (mysqli_num_rows($resultt) > 0) {

$response["details"] = array();
       
    while ($row1 = mysqli_fetch_array($resultt)) {
        // temp user array

    
        
        $unm=$row1["unm"];
        
        $sql_sel22="SELECT *FROM donor where unm='$unm' ";
                            
	$res_sel22=mysqli_query($con,$sql_sel22);

	while($row_sel22=mysqli_fetch_array($res_sel22))
	{
	
                   $mno=$row_sel22['mno'];                       
                                           
                                           
                                           
        }
        
        $did=$row1["did"];
        
        $sql_sel2="SELECT *FROM donating where did='$did' ";
                            
	$res_sel2=mysqli_query($con,$sql_sel2);

	while($row_sel2=mysqli_fetch_array($res_sel2))
	{
	        $pnames["did"] = $row_sel2["did"];
	        
	        $pnames["unm"] = $row_sel2["unm"];
	     
	        
            $pnames["type"] = $row_sel2["dtype"];
            
             $pnames["desc"] =$row_sel2["descrptn"];
            
            $pnames["qty"] = $row_sel2["qty"];
            
            $pnames["receive"] =$row_sel2["receive"];
            
            $pnames["date"] = $row_sel2["datee"];
            
            $pnames["adrs"] = $row_sel2["adrs"];
            
             $pnames["mno"] = $mno;
            
            array_push($response["details"], $pnames);                     
                                           
                                           
                                           
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

mysqli_close($con);  ?>