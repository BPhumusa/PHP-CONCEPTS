<html>
<fieldset>
<div class="header">
 <img src="Banner.png"  alt="Logo"width="300" height="80"/>
<marquee direction ="right"> Welcome to Web & Vetted Developer's Platform</marquee>
</div>
<legend>Rate Developer</legend>
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
<Fieldset><Legend><h3>Rate Developer!</h3></legend>
<body bgcolor="Silver"/>
<!--HTML form used to capture job details details-->
<form name='Register' action='RateDeveloper.php' method='post'>
    Developer Name:<br/>
<input type='text' name=' DeveloperName'/><br/>
    Job Description   :<br/>
<input type='text' name='JobDescription'/><br/>
	Service Quality   :<br/>
<input type='text' name='ServiceQuality'/><br/>
    Satisfactory Level   :<br/>
<input type='text' name='Satisfactory'/><br/>
<fieldset class="rating">
<legend>Please rate:</legend>
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

</fieldset>
<br/>
<style>
	.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
<br/>
<br/>
<br/>
<br/>
<input type='submit' name='btnsave' value='Save'/>	
<a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeClient.php"><button type="button"> Cancel </button></a>
</form>
</fieldset>  
</html>
<?php

try{
    

require_once("DataAccess.php");

    $conn = (new DataAccess())->GetOracleConnection();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){  //Checking if was form submitted
        
                      //Getting User Data into Variables
        $DeveloperName=$_REQUEST['DeveloperName']; 
        $JobDescription=$_REQUEST['JobDescription']; 
        $ServiceQuality=$_REQUEST['ServiceQuality']; 
        $Satisfactory=$_REQUEST['Satisfactory']; 
        $rating=$_REQUEST['rating']; 
	   //Validation of Data
        if(empty( $DeveloperName) || empty($JobDescription) || empty($ServiceQuality) || empty($Satisfactory )|| empty( $rating)){
            echo "<script>alert('Please Enter missing data values !!');</script>";
        }else{
        
            //Getting Button Clicked by User 
            if(isset($_REQUEST['btnsave'])){ 

                    //Execute Using Exec
                    $sql  = "Insert into Feedback(Feedback_ID,Job_Description,Service_Quality,Satisfactory_Level,Please_Rate) VALUES (Feedback_Sequence.nextval,'$JobDescription','$ServiceQuality',' $Satisfactory','$rating')"; 
                    $count= $conn->exec($sql);
                
                    
                    //Checking for Errors
                    if (PEAR::isError($count)) {
                        die ($count->getUserInfo()); 
                    }
                    //Confirmation of Submission
                    $msg = ($count>0) ? "Rating Completed successfully !!" : "Rating Failed !!";
                    echo "<script>alert('$msg');</script>";

            } //Close if Save
            
        }//Close Validation
                    
                
       }//Close if Post
    
    
    } catch(Exception $ex){
        echo $ex->getMessage();
    }

    
    
?>
