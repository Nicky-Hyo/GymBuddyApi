<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_GET['id'])&&isset($_GET['name']) &&isset($_GET['longitude']) && isset($_GET['latitude']) &&isset ($_GET['opening'])&&isset($_GET['closing'])){ 
    include_once("connection.php"); 
    $id = $_GET['id']; 
    $name = $_GET['name'];
	$longitude= $_GET['longitude'];
	$latitude=$_GET['latitude'];
	$opening=$_GET['opening'];
	$closing=$_GET['closing'];
    $sql = "SELECT id,name,longitude,latitude,opening,closing FROM locations_092209"; 
    $result = $conn->query($sql);   
    if ($result->num_rows > 0) {
        echo "LoginSuccess"."<br>"; 
        echo $row['id']."<br>";
        echo $row['name']."<br>";
        echo $row['longitude']."<br>";
        echo $row['latitude']."<br>";
        echo $row['opening']."<br>";
        echo $row['closing']."<br>";
	while ($row = $result->fetch_assoc()) {
    echo $row['id']."<br>";
}
  }   
  else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
  }
    
}
?>