<?php


$servername ="localhost";
$username ="root";
$password ="";
$dbname ="hotel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection Error");
}

 session_start();

 if(!isset($_SESSION['username'])) {
        header("location:login.php");   
    }else
     {

    if(isset($_POST['submit'])) {
   

    
    //retreving values from form
    $username = $_SESSION['username'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $roomType = $_POST['roomType'];   
        
    
    $sql = "INSERT INTO booking(username, checkIn, checkOut , adult , children , roomType )
            VALUES('$username','$checkIn', '$checkOut', '$adult','$children','$roomType')";
            
    if(mysqli_query($conn,$sql)===TRUE) {
        $_SESSION['username'] = $username;
        echo "booking successfull!";
    } else {
        echo mysqli_error($conn);
    }
    }
        header('Location: index.php?success=1');
exit;
}




?>