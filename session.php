<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['email']) && !empty(isset($_POST['email']))&&isset($_POST['date']) && !empty(isset($_POST['date']))&&isset($_POST['location']) && !empty(isset($_POST['location'])) 
&& isset($_POST['exercise']) && !empty(isset($_POST['exercise']))&& isset($_POST['sets']) && !empty(isset($_POST['sets']))&& isset($_POST['reps']) && !empty(isset($_POST['reps']))){ 
  include_once("connection.php"); 
  $date=$_POST['date'];
  $location=$_POST['location'];
  $email = $_POST['email']; 
  $exercise = $_POST['exercise']; 
  $sets = $_POST['sets']; 
  $reps = $_POST['reps'];  
  
  $sql = "SELECT id FROM customers_092209 WHERE email='$email'"; 
  $result=$conn->query($sql);
  while ($row = $result->fetch_assoc()) {
	  $id=$row['id'];
	  $sql = "INSERT INTO sessions_092209 VALUES (NULL, '$id', '$date', '$location', '$exercise', '$sets', '$reps')";
	  if($conn->query($sql)===TRUE){
	      $last_id=mysqli_insert_id($conn);
	      echo"$last_id";
	  }
else { 
    echo "ErrorInsert"; 
    echo "Error: " . $sql . "<br>" . $conn->error; 
  }}
}?>