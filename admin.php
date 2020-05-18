<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Admin Login Page</title>
   <!-- Main CSS-->
    <link href="./f_end/main.css" rel="stylesheet" media="all"> 
    <link href="./f_end/bootstrap.min.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="./f_end/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./f_end/bootstrap.min.js"></script>
  
</head>
<body>
    <h1>HTML PART</h1>
     <div class="page-header">
    <img src="./f_end/tejasimg.jpg" alt="Tejas-Logo" style="width:130px;height:57px;"><br>  
     <h2><center><font color = "black">Welcome to Admin Login Page</font></center></h2>
    </div>
    

<?php 
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?php echo $_SESSION['msg_type'] ?>"> 
    <?php 
        echo  $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div> 
<?php endif ?>   
<?php 
    $mysqli =  new mysqli('localhost', 'root', 'Sathvik*1','mysql');
    $result =  mysqli_query($mysqli, "SELECT * FROM $table_name");
?>
<div class="container">
<div class = "row justify-content-center">
    <table class = "table">
        <thead>
            <tr>
                <th>ID</th>
                <th>
                    ipaddress
                </th>
                <th>
                    routerip
                </th>
                <th>
                    Product
                </th>
                <th>username</th>

                <th colspan="2">Action</th>
            </tr>
        </thead>
        <?php
            while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['ipaddress']?></td>
                <td><?php echo $row['routerip']?></td>
                <td><?php echo $row['Product']?></td>
                <td><?php echo $row['username']?></td>
                <td>
                    <a href="admin.php?edit=<?php echo $row['ID']; ?>"
                        class="btn btn-info">Edit</a>
                    <a href="admin.php?delete=<?php echo $row['ID']; ?>"
                        class="btn btn-danger">Delete</a>    
                </td>
            </tr>
            <?php endwhile; ?>        
        </table>

</div>
            <div class="card card-4"> 
                <div class="card-body"> 
                  <div class="row_ row-space_">
                            <div class="col-3" style="background-color:ivory;">
                                 <h2 class="title">IP Data</h2>
                        <form method="POST" action="admin.php">
                                <div class="input-group_">
                                    <label class="label_">Edit IP Address:</label>
                                    <input class="form-control" name="ipaddress"  value="<?php echo $ipaddress_; ?>" minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required>                                
                                </div>   
                                   <div class="input-group_"> 
                               <label class="label_">Enter the Router-IP address:</label>
                               <input class="form-control" type="text"  name="routerip" value="<?php echo $routerip_; ?>" minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required>
                            </div>  
                          <div class="row_ row-space_">
                              <div class="col-2_">
                            <div class="input-group_">
                            <label class="label_">Select Name:</label>
                          
                                <select name="username" value="<?php echo $username_; ?>" required>
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
                              <div class="col-2_">  
                              <div class="input-group_">
                            <label class="label_">Select Product:</label>
                                <select name="Product" value="<?php echo "product"; ?>" required>
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
                                    <button type="Reset" class="btn_ btn--radius-2_ btn--red_">Reset</button>    
                                    <?php
                                        if($update == true):?>
                                              <button class="btn_ btn--radius-2_ btn--blue_" type="Update" name="Save">Update</button> 
                                        <?php else: ?>
                                               <button class="btn_ btn--radius-2_ btn--blue_" type="Submit" name="Save">Save</button>
                                    </div>
                                </form>
                            </div>
                  </div>
                </div>
            </div>
</div>
            
</body>
</html>

<?php
session_start();

//variables declaration
$ipsearch = $_POST["ipsearch"]; //Variables Declaration, received from form
$ipaddress = $_POST["ipaddress"];
$routerip = $_POST["routerip"];
$username = $_POST["username"];
$product = $_POST["Product"];
$leadname  = $_POST["username"];

$save = $_POST["Save"]; //variable to add new entries
$host = "localhost"; //phpmyadmin login credentials
$dbUsername = "root";
$dbPassword = "Sathvik*1";
$dbName = "mysql";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName); //establish conn. with phpmyadmin

//variables declaration for edit button
$ipaddress_  = '';
$routerip_   = '';
$username_   = '';
$product_    = '';
$update = false; //to change save btn to update for editing records

    if ($conn -> connect_errno) {
		echo "<h2><center>Aw, Snap :( Failed To Establish Connection, Please Try Again.</center></h2>" . $conn -> connect_error;
		exit();
    } 
    else{
        echo "connection established";
        if(isset($save)){
            mysqli_query($conn, "INSERT  INTO $table_name (Product, ipaddress, routerip, username) VALUES('$product', '$ipaddress', '$routerip', '$username')");
            $_SESSION['message'] = "Record Has Been Saved!";
            $_SESSION['msg_type'] = "success";
           // header("location: test_modal.php");
        } 
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            mysqli_query($conn, "DELETE FROM $table_name WHERE ID = $id");
            $_SESSION['message'] = "Record Has Been Deleted!";
            $_SESSION['msg_type'] = "danger";
           // header("location: test_modal.php");
        }   

       /* if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $update = true;
            $result = mysqli_query($conn, "SELECT * FROM $table_name WHERE ID =$id");
            if(count($result) == 1){
                $row = $result->fetch_array();
                $ipaddress_ = $row['ipaddress'];
                $routerip_ = $row['routerip'];
                $username_ = $row['username'];
                $product_ = $row['Product'];

            }
        }*/
    }

 
?>