<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'seminar';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
 

//include './check_con.php';


$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];

 



$sql = "INSERT INTO give(name,email,mobile) VALUES ('$name','$email','$mobile')";

if (mysqli_query($conn, $sql)) {

    ?>
    
    <html> <script> alert('Data added Successfully!!!'); window.location="givenow.html" </script> </html>

    <?php

}else{
    
    echo 'Error: ' .$sql .'<br>' .
    mysqli_error($conn);
}


?>