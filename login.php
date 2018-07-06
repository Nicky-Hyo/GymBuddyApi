<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['email']) && !empty(isset($_POST['email'])) 
  && isset($_POST['password']) && !empty(isset($_POST['password']))){ 
    include_once("connection.php"); 
    $email = $_POST['email']; 
    $password = $_POST['password'];     
    $sql = "SELECT email, password FROM customers_092209 
          WHERE email = '$email' AND password = '$password'"; 
    $result = $conn->query($sql); 
  if ($result->num_rows > 0) { 
    echo "LoginSuccess"."<br>";
    $sql="SELECT id FROM customers_092209 WHERE email = '$email' AND password = '$password'";
	$result=$conn->query($sql);
	while ($row = $result->fetch_assoc()) {
    echo $row['id']."<br>";
  } }
  else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
  }
}?>