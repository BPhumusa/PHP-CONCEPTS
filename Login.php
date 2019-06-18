<html>
<body >
<style>
   body {
   background: URL("IT1.jpg");
   background-size: 100% ; 
} 
</style>
<div class="header">
 <img src="Banner.png"  alt="Logo"width="300" height="80"/>
<h3><marquee direction ="right"> Welcome to Web & Vetted Developer's Platform</marquee></h3>
</div>

<div class="topnav">
<style> 
ul#menu li {
    display:inline;
}

ul#menu li a {
    background-color: black;
    color: white;
    padding: 5px 10px 5px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
	border-style: solid;
}

ul#menu li a:hover {
    background-color: orange;
}
</style>
<nav>	
<ul id="menu">
            <center>
            <li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Homepage.php"><link type="hyper link"> Home </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewServices.php"><link type="hyper link"> Services </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewDevelopers.php"><link type="hyper link"> Developers </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ContactUs.php"><link type="hyper link"> About Us </link></a></li>
            </center>	
</ul>
</nav>
   
</div>
    <form action="Login.php" method="post">

        <fieldset style="width:230px;background-color: turquoise ; margin-left: 570; margin-right: auto;">
            <table>
                <tr>
                    <td><label><b>Username</b></label></td>
                    <td><input type="text" placeholder="Enter Username" name="username" required style="width:150px;"></td>
                </tr>
                <tr>
                    <td><label><b>Password</b></label>
                    <td><input type="password" placeholder="Enter Password" name="password" required style="width:150px;"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>User Type</b>          
                        <select name='usertype' style="width:150px;float:right;"><br/>
                            <option value='0'>Select...</option>
                            <option value='Developer'>Developer</option>
                            <option value='Client'>Client</option>
                            <option value='Admin'>Admin</option>
                        </select><br/>
                    </td>
                </tr>
                <tr>
                   <td><button type="submit" name="btnlogin" style="float:right;">Login</button></td>
                   <td> <a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Homepage.php"><button type="button">Cancel</button></a></td>
                </tr>
            </table>
        </fieldset>

    </form>
</body>
</html>

<?php

require_once("DataAccess.php");//Calling the Connection string file

try {
        
    $conn = (new DataAccess())->GetOracleConnection();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){  //Checking is was Form Submitted
        
                  //Getting User Data into Variables
        $username=$_REQUEST['username']; 
        $password=$_REQUEST['password']; 
        $usertype=$_REQUEST['usertype']; 

        //Validation of Data
        if(empty($username) || empty($password) || $usertype=='0' )
            echo "<script>alert('Please enter missing data values !!');</script>";
        //} else { 

            //Get button clicked by user 
            if(isset($_REQUEST['btnlogin'])){ //Login button
                    
                    //Determination of TABLENAME AND PAGENAME based on selected USERTYPE
                    $tablename = "";
                    $pagename  = "";
               
                    if    ($usertype == 'Developer'){ $usertype  = 'Developer';  $pagename='HomeDeveloper.php';}
                    elseif ($usertype == 'Client'){ $usertype  = 'Membership_Application';      $pagename='HomeClient.php';}
					elseif ($usertype == 'Admin'){ $usertype  = 'Admin';      $pagename='HomeAdmin.php';}
                   
                
                     
                    $sqlCust  = "SELECT * FROM $usertype WHERE USERNAME=? AND PASSWORD=?"; 
					//$sqlCust  = "SELECT * FROM Staff WHERE USERNAME=? AND PASSWORD=?"; 
                    $types  = Array(  'text' , 'text'  );
                    $values = Array($username,$password);

                    //Execute Users
                    $stmt = $conn->prepare($sqlCust, null, MDB2_PREPARE_RESULT); 
                    $resultUsers = $stmt->execute($values);
                    //Check Errors
                    if (PEAR::isError($resultUsers)) {
                        die ($resultUsers->getUserInfo()); //GetDebugInfo()); //
                    }
                    $arrUsers    = $resultUsers->fetchAll(MDB2_FETCHMODE_ASSOC);
                    $countUsers  = count($arrUsers);
					//Fetch Returns Array so We use Count to get Count
                    
                    
                    if($countUsers>0){ //user successfully logged
                       
                        echo "<script> location.href='$pagename'; </script>";
                        exit(); //prevents code down from further execution after redirection
                    }else{ 
                        $msg = "Invalid username or password !!";
                        echo "<script>alert('$msg');</script>";
                    }

            } elseif (isset($_REQUEST['btncancel'])){ //Cancel Button  
                    // No need for coding Cancel button as it simply clears all fields on submission 
            }
            
        
    
    }
    

} catch (Exception $ex) {
    $msg=$ex->getMessage();
    echo $msg;
    echo "<script>alert('$msg');</script>";
    exit();
}


?>