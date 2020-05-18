
<?php


//if(isset($_POST["download_db"])){

//}
$Export = $_POST["Export"];
$ipsearch = $_POST["ipsearch"]; //Variables Declaration, received from form
$ipaddress = $_POST["ipaddress"];
$routerip = $_POST["routerip"];
$username = $_POST["username"];
$product = $_POST["Product"];
$row_d = -1; 
$row_ = -1;

if (!empty($username) || !empty($ipaddress) || !empty($routerip) || !empty($ipsearch)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "Sathvik*1";
	$dbName = "mysql";
	//create a connection:
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    
	if ($conn -> connect_errno) {
		echo "<h2><center>Aw, Snap :( Failed To Establish Connection, Please Try Again.</center></h2>" . $conn -> connect_error;
		exit();
	} 
	else{
         if(!empty($ipsearch)){
		    $SELECT_ = "SELECT ipaddress From $table_name Where ipaddress = '$ipsearch' Limit 1";
		    $result_ = mysqli_query($conn, $SELECT_);
		    if($result_){
		    	$row_ = mysqli_num_rows($result_);
		    	//echo "row_: $row_";
		    	//$row_++;
		    	mysqli_free_result($result_);
		    }
        
		if($row_ > 0){
       // $USER = "SELECT username From $table_name Where ipaddress = '$ipsearch' Limit 1"; 
          
                echo "<h2><center>$ipsearch Is Already Registered By The User.</center><h2>";    

                $row_ = -1;    
	           $conn->close();
             //   exit(); 
    }
        else{
                echo "<h2><center>$ipsearch Is Freely Available, You Can Register With The Same.</center></h2>";   
        }

}		else{
            if(!empty($ipaddress)){
			//echo "The IP address $ipaddress is available kindly register below.";
		        $SELECT = "SELECT ipaddress From $table_name Where ipaddress = '$ipaddress' Limit 1";
		        $INSERT = "INSERT Into $table_name (Product, ipaddress, routerip, username) values(?, ?, ?, ?)" ;
                $result = mysqli_query($conn, $SELECT);
	    	    if($result){
	    	    	$row_d = mysqli_num_rows($result);
	    	    	//echo "row: $row";
                    mysqli_free_result($result);
	    	    }	
	    	    if ($row_d > 0) {
                    echo "<h2><center>Oops:( Someone already registered using this IP-Address($ipaddress).</center></h2>";
                    $row_d = -1;
	    	    } else{
	    	    	mysqli_close($conn);
	    	    	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	    	    	$stmt = $conn->prepare($INSERT);
	    	    	$stmt->bind_param("ssss", $product, $ipaddress, $routerip, $username);
	    	    	$stmt->execute();
	    	    	echo "<h2><center>Hurrah! The IP-address $ipaddress is Registered Successfully Under Router-IP $routerip :)</center><h2>";
	    	    	echo "<h2><center>Thank You For Registering.</center></h2>";
                
	    	    }
	        }   
	        	$conn->close();
	        }
       }   
    }   
else {
	echo "<h2><center><b>Kindly fill the required fields.</b></h2></center>"; #server-side validation 
	die();
} 
?>







































//$Export = $_POST["Export"];  #for download validation: pending
$ipsearch = $_POST["ipsearch"]; //Variables Declaration, received from form
$ipaddress = $_POST["ipaddress"];
$routerip = $_POST["routerip"];
$username = $_POST["username"];
$product = $_POST["Product"];
$row_d = -1; 
$row_ = -1;

if (!empty($username) || !empty($ipaddress) || !empty($routerip) || !empty($ipsearch)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "Sathvik*1";
	$dbName = "mysql";
	//create a connection:
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    
	if ($conn -> connect_errno) {
		echo "<h2><center>Aw, Snap :( Failed To Establish Connection, Please Try Again.</center></h2>" . $conn -> connect_error;
		exit();
	} 
	else{
         if(!empty($ipsearch)){
		    $SELECT_ = "SELECT ipaddress or routerip From $table_name Where ipaddress = '$ipsearch' or routerip = '$ipsearch' Limit 1";
		    $result_ = mysqli_query($conn, $SELECT_);
		    if($result_){
		    	$row_ = mysqli_num_rows($result_);
		    	mysqli_free_result($result_);
		    }
        
		if($row_ > 0){
            echo "<h2><center>$ipsearch Is Already Registered By The User.</center><h2>";    
            $row_ = -1;    
	        $conn->close();
        }
        else{
                echo "<h2><center>$ipsearch Is Freely Available, You Can Register With The Same.</center></h2>";   
        }
        }		
        else{
            if(!empty($ipaddress)){
		        $SELECT = "SELECT ipaddress or routerip From $table_name Where ipaddress = '$ipaddress'  or routerip = '$ipaddress' Limit 1";
		        $INSERT = "INSERT Into $table_name (Product, ipaddress, routerip, username) values(?, ?, ?, ?)" ;
                $result = mysqli_query($conn, $SELECT);
	    	    if($result){
	    	    	$row_d = mysqli_num_rows($result);
                    mysqli_free_result($result);
	    	    }	
	    	    if ($row_d > 0){
                    echo "<h2><center>Oops:( Someone already registered using this IP-Address($ipaddress).</center></h2>";
                    $row_d = -1;
	    	    } else{
	    	    	mysqli_close($conn);
	    	    	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	    	    	$stmt = $conn->prepare($INSERT);
	    	    	$stmt->bind_param("ssss", $product, $ipaddress, $routerip, $username);
	    	    	$stmt->execute();
	    	    	echo "<h2><center>Hurrah! The IP-address $ipaddress is Registered Successfully Under Router-IP $routerip :)</center><h2>";
	    	    	echo "<h2><center>Thank You For Registering.</center></h2>";
                }
	        }   
	        	$conn->close();
	    }
    }   
}   
else {
	//echo "<h3><center><b>Kindly Fill The Required Fields.</b></h3></center>"; #server-side validation 
	die();
} 