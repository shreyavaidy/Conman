

$asql = "SELECT * FROM $_POST[username]";
$aresult = $conn->query($asql);

if ($aresult) {
    
    while($arow = $aresult->fetch_assoc()) {
       
	echo "<center> " . $arow["conference"]."<br>";
	echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $arow["place"]."-Date".$arow["date"]."<br>"; 
	
    }
} else {
    echo "0 conference results";
}

