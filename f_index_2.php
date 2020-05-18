<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>IP Query Page</title>
   <!-- Main CSS-->
    <link href="./f_end/main.css" rel="stylesheet" media="all">
    
</head>
<body>
    <img src="./f_end/tejasimg.jpg" alt="Tejas-Logo" style="width:130px;height:57px;"><br>
    <div class="page-header">
			<div class="jumbotron">
                <h2><center>Howdy! You are in a IP Quest</center></h2>
                                
                           </div>		
        </div> 
         <div class="input-group" class="select-dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">LOGIN
                      <span class="caret"></span> </button>                     
                      <ul class="dropdown-menu">
                          <li><a href="#">ADMIN LOGIN</a></li>
                          <li><a href="#">USER</a></li>
                      </ul>            
                  </div> 
            <div class="card card-4"> 
                <div class="card-body"> 
                  <div class="row row-space">
                            <div class="col-6" style="background-color:ivory;">
                                 <h2 class="title">IP Query</h2>
                                 <form method="POST" action="f_index_2.php">
                                <div class="input-group">
                                    <label class="label">Enter the query IP address (IPv4):</label>
                                    <input class="input--style-4" name="ipsearch" minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required> </div>
                                      <div class="col-2">
                                         <div class="input-group">
                                         <label class="label">Select Name:</label>
                                         <div class="rs-select2 js-select-simple select--no-search" >
                                         <select name="username" required>
                                         <option disabled="disabled" selected="selected">Choose Project Lead</option>
                                         <option>Asha</option>
                                         <option>Bharath</option>
                                         <option>Faisal</option>
                                         <option>Gayathri</option>
                                         <option>Gurumurthy</option>
                                         <option>Kamal</option>
                                         <option>Monotosh</option>
                                         <option>Musheer</option>
                                         <option>Prasad</option>
                                         <option>Sagar</option>
                                         <option>Vikram</option>
                                         </select>
                                <div class="select-dropdown"></div>
                            </div> 
                             </div>      
                                </div> 

                                    <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="Submit">Search</button>
                                    </div>
                                </form>
                              
                                <!--<form method="POST" action="f_index_2
                                .php">
                                     <div class="p-t-10">    
                                     <div class="input-group"> 
                                     <h2 class="title">IP Database Download</h2>
                                     <button class="btn btn--radius-2 btn--blue" name = "Export" type="Submit">Export</button> 
                                </div>
                            </div>
                            </form> Pending download feature--> 
                            </div>
                        
                           <div class="col-6" style="background-color: ivory;">
                            <h2 class="title">IP Registeration</h2>
                            <form method="POST" action="f_index_2.php">
                           <div class="input-group">
                               <label class="label">Register with the IP-address (IPv4):</label>
                               <input class="input--style-4" name="ipaddress" minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required>
                           </div>
                           <div class="input-group"> 
                               <label class="label">Enter the Router-IP address:</label>
                               <input class="input--style-4" type="text"  name="routerip"  minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required>
                            </div>  
                          <div class="row row-space">
                              <div class="col-2">
                            <div class="input-group">
                            <label class="label">Select Name:</label>
                           <div class="rs-select2 js-select-simple select--no-search" >
                                <select name="username" required>
                                    <option disabled="disabled" selected="selected">Choose Name</option>
                                    <option>Asha</option>
                                    <option>Bharath</option>
                                    <option>Faisal</option>
                                    <option>Gayathri</option>
                                    <option>Gurumurthy</option>
                                    <option>Kamal</option>
                                    <option>Monotosh</option>
                                    <option>Musheer</option>
                                    <option>Prasad</option>
                                    <option>Sagar</option>
                                    <option>Vikram</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div> 
                             </div>      
                                </div> 
                              <div class="col-2">  
                              <div class="input-group">
                            <label class="label">Select Product:</label>
                                <select name="Product" required>
                                    <option disabled="disabled" selected="selected">Choose Product</option>
                                    <option>Automation</option>
                                    <option>CEF4C-PTN</option>
                                    <option>CEF8-PTN</option>
                                    <option>EMS/NMS NE'S</option>
                                    <option>GPON</option>
                                    <option>L3VPN</option>
                                    <option>Reliability</option>
                                    <option>SDN</option>
                                    <option>TAC</option>
                                    <option>TJ1400P</option>
                                    <option>TJ14XX</option>
                                    <option>TJ1400-18</option>
                                    <option>TJ1600C</option>
                                    <option>TJ1900</option>
                                    <option>XA14ET/OT</option>
                                    <option>XA20G</option>
                                    <option>XA60G</option>
                                    <option>XA100G</option>
                                </select>
                                <div class="select-dropdown"></div>
                           </div>  
                                </div>
                            </div>    
                               <div class="p-t-15">
                                <button type="Reset" class="btn btn--radius-2 btn--blue">Reset</button>
                                <button type="Submit" class="btn btn--radius-2 btn--blue">Confirm</button>
                                
                               </div>  
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
<?php
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
	echo "<h3><center><b>Kindly fill the required fields.</b></h3></center>"; #server-side validation 
	die();
} 
?>
