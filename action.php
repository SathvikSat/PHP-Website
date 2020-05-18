
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>IP Query Page</title>
   <!-- Main CSS-->
    <link href="./f_end/main.css" rel="stylesheet" media="all">
    <link href="./f_end/bootstrap.min.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="./f_end/bootstrap.min.js"> </script>
    <script type="text/javascript" src="./f_end/jquery.min.js"></script>
</head>
<body>


 <div class="page-header">
    <img src="./f_end/tejasimg.jpg" alt="Tejas-Logo" style="width:130px;height:57px;"><br>  
     <h2><center><font color = "black">Welcome to Admin Page</font></center></h2>
    </div>
   
      <div class="topnav">
       <div class="login-container" >
            
            <form action="f_index_2.php" method="POST">
                <button type="submit">LOGOUT</button>
        </form>
        </div>
    </div> 
      
            <div class="card card-4"> 
                <div class="card-body"> 
                  <div class="row_ row-space_">
                            <div class="col-3" style="background-color:ivory;">
                                 <h2 class="title">IP Deletion</h2>
                                 <form method="POST" action="action.php">
                                <div class="input-group_">
                                    <label class="label_">Delete IP Address:</label>
                                    <input class="input--style-4_" name="ipdelete" minlength="7" maxlength="15" size="15" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" placeholder="0.0.0.0" required> </div>
                                      <div class="col-2_">
                                         <div class="input-group_">
                                         <label class="label_">Select Under:</label>
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
                                    <button class="btn_ btn--radius-2_ btn--red_" type="Submit">Delete</button>
                                    </div>
                                </form>
                              
                                <!--<form method="POST" action="f_index_2
                                .php">
                                     <div class="p-t-10">    
                                     <div class="input-group_"> 
                                     <h2 class="title">IP Database Download</h2>
                                     <button class="btn_ btn--radius-2_ btn--blue_" name = "Export" type="Submit">Export</button> 
                                </div>
                            </div>
                            </form> Pending download feature--> 
                            </div>



                  </div>
                </div>
            </div>
</body>
</html>

<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "Sathvik*1";
$dbName = "mysql";
$ipdelete = $_POST["ipdelete"];
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName); 
$query = "SELECT * FROM $table_name";
 

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Product</font> </td> 
          <td> <font face="Arial">ipaddress</font> </td> 
          <td> <font face="Arial">routerip</font> </td> 
          <td> <font face="Arial">username</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    echo "in";
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["Product"];
        $field3name = $row["ipaddress"];
        $field4name = $row["routerip"];
        $field5name = $row["username"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
 

?>