<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['email']) && isset($_POST['gender']) &&isset($_POST['age']) && isset($_POST['weight']) &&isset($_POST['target_weight'])&&isset($_FILES['profile'])&&isset($_POST['location'])){ 
  include_once("connection.php"); 
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $age = $_POST['age']; 
  $weight = $_POST['weight'];   
  $target_weight=$_POST['target_weight'];
  $profile=$_FILES['profile'];
  $location=$_POST['location'];
  $sql = "UPDATE customers_092209 SET gender='$gender',age='$age',weight='$weight',target_weight='$target_weight',profile='$profile',location='$location' WHERE email='$email'"; 
  if ($conn->query($sql) === TRUE) {      
    echo "Record updated successfully"; 
  } else { 
    echo "ErrorUpdate"; 
    echo "Error updating record: " . $sql . "<br>" . $conn->error; 
  }
}?>