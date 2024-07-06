<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="hotel";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();

if(!isset($_SESSION['username'])) {
	header("location: adminlogin.php");
} else {
	

// sql to delete a record

$blog_id = $_GET['blog_id'];

$sql = "DELETE FROM blog WHERE blog_id='$blog_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>

