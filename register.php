<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['firstname']) && !empty(isset($_POST['firstname']))&&isset($_POST['lastname']) && !empty(isset($_POST['lastname']))&&isset($_POST['email']) && !empty(isset($_POST['email'])) 
&& isset($_POST['password']) && !empty(isset($_POST['password']))){ 
  include_once("connection.php"); 
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email = $_POST['email']; 
  $password = $_POST['password'];     
  $sql = "INSERT INTO customers_092209 VALUES (NULL, '$firstname', '$lastname', '$email', '$password', NULL, NULL, NULL, NULL, NULL, NULL)"; 
  if ($conn->query($sql) === TRUE) { 
    $last_id = mysqli_insert_id($conn); 
    echo "$last_id"; 
  } else { 
    echo "ErrorInsert"; 
    echo "Error: " . $sql . "<br>" . $conn->error; 
  }
}?>