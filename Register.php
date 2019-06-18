<html>
<Fieldset><Legend><h3>Register Please!</h3></legend>
<body bgcolor="Silver"/>
<!--HTML form used to capture registration details-->
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
<form name='Register' action='Register.php' method='post'>
    First Name:<br/>
    <input type='text' name='fname'/><br/>
    Surname   :<br/>
    <input type='text' name='sname'/><br/>
    Gender    :<br/>
    <select name='gender' style="width:155px;"><br/>
        <option value='0'>Select...</option>
        <option value='Male'>Male</option>
        <option value='Female'>Female</option>
    </select><br/>
    Date Of Birth:<br/>
    <input type="date" name='dob'/><br/>
    Address   :<br/>
    <input type='text' name='address'/><br/>
    Telephone   :<br/>
    <input type='text' name='telephone'/><br/>
	Title  :<br/>
    <input type='text' name='title'/><br/>

    Username   :<br/>
    <input type='text' name='username'/><br/>

     Password   :<br/>
    <input type='password' name='password'/><br/>
    <br/>
    <input type='submit' name='btnsave' value='Save'/>
    <a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Login.php"><button type="button">Login </button></a>	
	<a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Homepage.php"><button type="button"> Cancel </button></a>
		

</form>
</fieldset>  
</html>
    
<?php

try{
    

require_once("DataAccess.php");

    $conn = (new DataAccess())->GetOracleConnection();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){  //Checking if was form submitted
        
                      //Getting User Data into Variables
        $fname=$_REQUEST['fname']; 
        $sname=$_REQUEST['sname']; 
        $gender=$_REQUEST['gender']; 
        $dob=(new DateTime($_REQUEST['dob']))->format('Y-M-d');   //Formatting Date into ORACLE Format
        $address=$_REQUEST['address']; 
        $telephone=$_REQUEST['telephone']; 
		$title=$_REQUEST['title']; 
        $username=$_REQUEST['username']; 
        $password=$_REQUEST['password']; 
 

	   //Validation of Data
        if(empty($fname) || empty($sname) || empty($gender) || empty($dob )|| empty( $username) || empty($password)){
            echo "<script>alert('Please Enter missing data values !!');</script>";
        }else{
        
            //Getting Button Clicked by User 
            if(isset($_REQUEST['btnsave'])){ 

                    //Execute Using Exec
                    $sql  = "Insert into Membership_application(Membership_ID,Firstname,Surname,Gender,Date_Of_Birth,Address,Telephone,Title,Username,Password) VALUES (Member_Sequence.nextval,'$fname','$sname','$gender','$dob','$address','$telephone','$title','$username','$password')"; 
                    $count= $conn->exec($sql);
                
                    
                    //Checking for Errors
                    if (PEAR::isError($count)) {
                        die ($count->getUserInfo()); 
                    }
                    //Confirmation of Submission
                    $msg = ($count>0) ? "Registration completed successfully !!" : "Registration failed !!";
                    echo "<script>alert('$msg');</script>";

            } //Close if Save
            
        }//Close Validation
                    
                
       }//Close if Post
    
    
    } catch(Exception $ex){
        echo $ex->getMessage();
    }

    
    
?>
