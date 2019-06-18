<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 20px;
  text-align: left;
  background: white;
}

.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
  padding: 10px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 10px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 10px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 10px;
  margin-top: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div style="position: absolute; z-index: 4; right: 52px; height: 44px; background-color: rgb(gray); letter-spacing: normal; width: 40%;" id="googleSearch">
<div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 gsc-input" style="width: 100%; padding: 2px;"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id1" placeholder="Search" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border-style: solid; margin: 0px; width:150px height: 30px;  left  no-repeat rgb(255, 255, 255); text-indent: 48px; outline: none;"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" title="Clear search box" role="button" style="display: none;"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-overlay"><div class="gsc-results-close-btn" tabindex="0"></div><div class="gsc-tabsAreaInvisible"><div class="gsc-tabHeader gsc-inline-block gsc-tabhActive"></div><span class="gs-spacer"> </span></div><div class="gsc-tabsAreaInvisible"></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><table cellspacing="0" cellpadding="0" class="gsc-resultsHeader"><tbody><tr><td class="gsc-twiddleRegionCell"><div class="gsc-twiddle"><div class="gsc-title"></div></div><div class="gsc-stats"></div><div class="gsc-results-selector gsc-all-results-active"><div class="gsc-result-selector gsc-one-result" title="show one result">&nbsp;</div><div class="gsc-result-selector gsc-more-results" title="show more results">&nbsp;</div><div class="gsc-result-selector gsc-all-results" title="show all results">&nbsp;</div></div></td><td class="gsc-configLabelCell"></td></tr></tbody></table><div><div class="gsc-expansionArea"></div></div></div></div></div></div><div class="gsc-modal-background-image" tabindex="0"></div></div></div></div>
</div>
<div id="clockbox"></div>
</head>
<header>
</header>
<body>
<div class="header">
 <img src="Banner.png"  alt="Logo"width="300" height="80"/>
<marquee direction ="right"> Welcome to Web & Vetted Developer's Platform</marquee>
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
            <li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeAdmin.php"><link type="hyper link"> Home </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewServices.php"><link type="hyper link"> Services </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewDevelopers.php"><link type="hyper link"> Developers </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Applications.php"><link type="hyper link"> Applications </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ContactUs.php"><link type="hyper link"> About Us </link></a></li>
            </center>
			
            <li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Login.php" style="float:right"><button type="button">  LogOut </button></a></li>			
 
        
</ul>
</nav>
   
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2> Only Admin Approves Developers Application</h2>
      <?php
require_once("DataAccess.php");
try {
        
    $conn = (new DataAccess())->GetOracleConnection();    
    $sql  = "SELECT * FROM Portfolio";
    $types  = array();
    $values = array();
    $stmt   = $conn->prepare($sql, $types, MDB2_PREPARE_RESULT);
    $result = $stmt->execute($values);
	$result = $conn->query($sql); 
    $sql  = "SELECT * FROM Membership_Application"; 
    $result1 = $conn->query($sql); 
                    // Checking  if the query was executed properly
    if (PEAR::isError($result)) {
        die ($result->getMessage());
    }elseif(PEAR::isError($result1)){
        die ($result1->getMessage());
    }
                    // Fetching  all result and free the result and disconnect the connection.
    $arr_product_types = $result->fetchAll(MDB2_FETCHMODE_ASSOC);
    $result->free();
	$arr_branch = $result1->fetchAll(MDB2_FETCHMODE_ASSOC);
    $result1->free();
	
	} catch(Exception $ex){
        echo $ex->getUserInfo();
    }
?>
<html>
<Fieldset><Legend><h3>Approve Developer Application!</h3></legend>
<body bgcolor="Silver"/>
<!--HTML form used to capture registration details-->
<form name='Approve' action='Applications.php' method='post'>
    Portfolio ID:<br/>
    <?php
		echo "<select name='Portfolio_id'>";
		echo "<option value='0'>Select...</option>";
		foreach($arr_product_types as $rowdata){
			$rowkeys     = array_keys($rowdata);
			$col_id      = $rowkeys[0];  
			$col_name    = $rowkeys[1]; 
			$col_id_val  = $rowdata[$col_id]; 
			$col_name_val= $rowdata[$col_name];
			echo "<option value='$col_id_val'>$col_name_val</option>";
		}
		echo "</select>";
	?>
	<br/>
    Membership ID   :<br/>
    <?php
		echo "<select name='Membership_id'>";
		echo "<option value='0'>Select...</option>";
		foreach($arr_branch as $rowdata){
			$rowkeys     = array_keys($rowdata);
			$col_id      = $rowkeys[0];  
			$col_name    = $rowkeys[1]; 
			$col_id_val  = $rowdata[$col_id]; 
			$col_name_val= $rowdata[$col_name];
			echo "<option value='$col_id_val'>$col_name_val</option>";
		}
		echo "</select>";
	?>
	<br/>
    Address   :<br/>
    <input type='text' name='address'/><br/>
    Telephone   :<br/>
    <input type='text' name='telephone'/><br/>
    Username   :<br/>
    <input type='text' name='username'/><br/>

     Password   :<br/>
    <input type='password' name='password'/><br/>
    <br/>
    <input type='submit' name='btnsave' value='Approve'/>	
	<a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeAdmin.php"><button type="button"> Cancel </button></a>
		

</form>
</fieldset>  
</html>
    
<?php

try{
    

require_once("DataAccess.php");

    $conn = (new DataAccess())->GetOracleConnection();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){  //Checking if was form submitted
        
                      //Getting User Data into Variables
        $Portfolio=$_REQUEST['Portfolio_id']; 
        $Membership=$_REQUEST['Membership_id']; 
        $address=$_REQUEST['address']; 
        $telephone=$_REQUEST['telephone']; 
        $username=$_REQUEST['username']; 
        $password=$_REQUEST['password']; 
 

	   //Validation of Data
        if(empty($Portfolio) || empty($Membership) || empty($address) || empty($telephone )|| empty( $username) || empty($password)){
            echo "<script>alert('Please Enter missing data values !!');</script>";
        }else{
        
            //Getting Button Clicked by User 
            if(isset($_REQUEST['btnsave'])){ 

                    //Execute Using Exec
                    $sql  = "Insert into Developer(Developer_ID,Portfolio_id,Membership_id,Address,Telephone,Username,Password) VALUES (Approve_Sequence.nextval,'$Portfolio','$Membership','$address','$telephone','$username','$password')"; 
                    $count= $conn->exec($sql);
                
                    
                    //Checking for Errors
                    if (PEAR::isError($count)) {
                        die ($count->getUserInfo()); 
                    }
                    //Confirmation of Submission
                    $msg = ($count>0) ? "Developer Approved Successfully !!" : "Developer Approval Failed !!";
                    echo "<script>alert('$msg');</script>";

            } //Close if Save
            
        }//Close Validation
                    
                
       }//Close if Post
    
    
    } catch(Exception $ex){
        echo $ex->getMessage();
    }

    
    
?>

	  </body>
    </div>
    <div class="card">
      <h3>Overview</h3>
<fieldset><legend><h5>Why Use Web & Vetted?</h5></legend>
<p>
We are the only in North-East of England that puts Web developers together with their clients.
</p>
<p>
We enable Developers to apply for tenders posted/Uploaded by Clients/ Small Companies.
</p>
<p>
We enable secure payments between clients and developers over completed projects<br/>Making sure developers finish projects well on time and are paid by clients.<br/>
finish projects well on time and are paid by clients.
</p>
<p>
As long as users of Web & Vetted agree and comply </br>with our codes of conduct they will benefit from using this site/Platform.
</p>
</fieldset>
</div>
</div>
  <div class="rightcolumn">
    <div class="card">
      <h2>More Info</h2>
      <p>Web & Vetted is a business venture focused at provision of freelance web development for small businesses/Client.</p>
	  <div class="fakeimg"><h5>Stories</h5><p>Over years small businesses have been robbed of their money by developers,  who claimed they could deliver web services but ending up delivering low 
	  quality websites which could not even meet their requirements and needs</p></div>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>
<h5>All Members of Web & Vetted Have:</h5>
Access all Services they are entitled to freely.<br/>
To give feedback, comments and complaints at any point they face problems on our site.
</p></div>
    </div>
    <div class="card">
      <h3>Follow Us</h3>
	  <a href="https://Twitter.com"><img src="Twitter.png"alt="Twitter"width="100" height="70" /></a>
	  <a href="https://Facebook.com"><img src="Facebook.png" alt="Facebook"width="70" height="70" /></a>
    </div>
  </div>
</div>

<div class="footer">
  <center>Copy Rights @ Busani Phumusa 2019</center>
</div>

</body>
</html>
