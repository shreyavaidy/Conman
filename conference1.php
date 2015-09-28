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
            <div class="title">VIEW&nbsp; &nbsp; </div> 
            <div class="title"><a href="conmann.xml"> XML</a> </div>
        
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

echo "<center><h1>Conference Listing </h1></center>";
$sql = "SELECT * FROM conference";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "S.NO " . $row["sno"]. "<a href='agenda.html'> " . $row["conname"]."</a><br>";
	echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["place"]."-Date".$row["date"]."<br>"; 
    }
} else {
    echo "0 results";
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