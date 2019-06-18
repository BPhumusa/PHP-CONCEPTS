<fieldset>
<div class="header">
 <img src="Banner.png"  alt="Logo"width="300" height="80"/>
<marquee direction ="right"> Welcome to Web & Vetted Developer's Platform</marquee>
</div>
<legend>View Ratings </legend>
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
            <li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/HomeDeveloper.php"><link type="hyper link"> Home </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ProfileView.php"><link type="hyper link"> Profile </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewServices.php"><link type="hyper link"> Services </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ViewDevelopers.php"><link type="hyper link"> Developers </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Ratings.php"><link type="hyper link"> Ratings </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/ContactUs.php"><link type="hyper link"> About Us </link></a></li>
			<li><a href ="http://sechaba.bac.ac.bw:8080/cis15-040/PRODUCT DEVELOPMENT/Login.php" style="float:right"><button type="button">LogOut </button></a></li>	
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
<?php
require_once("DataAccess.php");
$conn=(new DataAccess())-> GetOracleConnection();
$sql = "SELECT * FROM Feedback ORDER BY Feedback_ID ASC";
$result= $conn->query($sql);
//checks for errors
if (PEAR::isError($result)) {
	die($result -> getUserInfo());
}
//fetch results and disconnect
$arr = $result -> fetchAll(MDB2_FETCHMODE_ASSOC);
$result -> free();
$conn-> disconnect();

//manipulate data
$row_count=count($arr);
$keys= array_keys($arr[0]);
echo "<table border='1' cellpadding='1' cellspacing='0' bgcolor='white'>";
//create a header row
echo "<tr bgcolor='skyBlue'>";
for ($k=0; $k< count($keys); $k++){
$colname= strtoupper($keys[$k]);
echo "<td> $colname </td>";
}
//dispaly data in html table
foreach($arr as $row) {
	echo "<tr>";
	for ($i=0; $i< count($keys);$i ++) {
		$colname=$keys[$i];
		$value = $row[$colname];
		echo "<td> $value </td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</br>
</a>
</fieldset>
</html>