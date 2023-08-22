<?php
// Connect to the MySQL database

$conn = mysqli_connect("localhost","root","","test");

// Check for errors
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Get the form data
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile_number'];
$licence=$_POST['licence'];
// Insert the data into the database
$sql = "INSERT INTO registration VALUES ('$email','$user_name','$licence','$password',CURRENT_TIMESTAMP,'$mobile')";
if (mysqli_query($conn, $sql)) {
  echo "Registration Successfull!";
  echo nl2br("\n");
  echo "Login with the same emailID and Password";
  echo "<a href="home.html">click_here<a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
