<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>About CONMAN</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="black">
<div id="wrap" style="background-color:#FFA500;">

       <div class="header">
       		<div class="logo"><a href="index.html"><img src="images/conlogo.jpg" height="80" width="150" alt="" title="" border="0" /></a></div>            
       </div> 
       
       <div class="center_content">
       	<div class="left_content">
            <div class="crumb_nav">
            <a href="index.html">HOME</a> 
            </div>
            <div class="title">VIEW</div>
        
            <div class="feat_prod_box_details">
            <p class="details">
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM conuser WHERE name='$_POST[username]'";
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    $row = $result->fetch_assoc();

      if($row["password"] == $_POST['password'])
	{
	

$nsql = "SELECT * FROM conference WHERE sno='$_POST[snumber]'";
$rresult = $conn->query($nsql);

if ($rresult) {
    
    $rrow = $rresult->fetch_assoc(); 
       
	$nnsql = "INSERT INTO $_POST[username](sno,conference,place,date) VALUES('$rrow[sno]','$rrow[conname]','$rrow[place]','$rrow[date]')";

if ($conn->query($nnsql) === TRUE) {
    
	echo "<center><h3>Conferences you, ".$_POST['username']." have marked going:<br></h3></center>";



$asql = "SELECT * FROM $_POST[username]";
$aresult = $conn->query($asql);

if ($aresult) {
    
    while($arow = $aresult->fetch_assoc()) {
       
	echo "--> " . $arow["conference"]."<br>";
	echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $arow["place"]."-Date".$arow["date"]."<br>"; 
	
    }
} else {
    echo "0 conference results";
}






} else {
    echo "Error updating record: " . $conn->error;
}
	
    
} else {
    echo "0 conference results";
}


	}
	else
	{
	header("Location: http://localhost/project/login.html");
	die();
}
	
	
	
    
}
else {
    echo "no such username found";
}
$conn->close();
?>



            </p>
            
            
            </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
        
                	
            
                
              
             
                                 
             
             
        
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
       </div>
        
       
       
        </div>
        
       
       
    



</body>
</html>