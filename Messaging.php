<!DOCTYPE html>
<html>
<fieldset>
<div class="header">
<img src="Banner.png"  alt="Logo"width="300" height="80"/>
<marquee direction ="right"> Welcome to Web & Vetted Developer's Platform</marquee>
</div>
<html>
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
            <li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeClient.php"><link type="hyper link"> Home </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewServices.php"><link type="hyper link"> Services </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewDevelopers.php"><link type="hyper link"> Developers </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/RateDeveloper.php"><link type="hyper link"> Rate </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Messaging.php"><link type="hyper link"> Feedback </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ContactUs.php"><link type="hyper link"> About Us </link></a></li>	
            </center>
			
            		
 
        
</ul>
</nav>
   
</div>
<style>
   body {
   background: URL("IT1.jpg");
   background-size: 100% ; 
} 
</style>
<fieldset>
<head>
<title>Popup contact form</title>
</head>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<br>
<input id="name" name="name" placeholder="Name" type="text"></br>
</br>
<input id="email" name="email" placeholder="Email" type="text"></br>
</br>
<textarea id="msg" name="message" placeholder="Message"></textarea></br>
<input type='submit' name='btnsave' value='Send'/>
<a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeClient.php"><button type="button"> Cancel </button></a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
</fieldset>
</fieldset>

</html>
<?php

try{
    

require_once("DataAccess.php");

    $conn = (new DataAccess())->GetOracleConnection();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){  //Checking if was form submitted
        
                      //Getting User Data into Variables
        $name=$_REQUEST['name']; 
        $email=$_REQUEST['email']; 
        $message=$_REQUEST['message']; 
	   //Validation of Data
        if(empty( $name) || empty($email) || empty($message)){
            echo "<script>alert('Please Enter missing data values !!');</script>";
        }else{
        
            //Getting Button Clicked by User 
            if(isset($_REQUEST['btnsave'])){ 

                    //Execute Using Exec
                    $sql  = "Insert into Help(Help_ID,name,email,message) VALUES (Help_Sequence.nextval,'$name','$email','$message')"; 
                    $count= $conn->exec($sql);
                
                    
                    //Checking for Errors
                    if (PEAR::isError($count)) {
                        die ($count->getUserInfo()); 
                    }
                    //Confirmation of Submission
                    $msg = ($count>0) ? "Message Sent Successfully !!" : "Message Send Failed !!";
                    echo "<script>alert('$msg');</script>";

            } //Close if Save
            
        }//Close Validation
                    
                
       }//Close if Post
    
    
    } catch(Exception $ex){
        echo $ex->getMessage();
    }

    
    
?>
