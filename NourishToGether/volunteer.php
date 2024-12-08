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


$email= $_GET['username'];
$password= $_GET['password'];


$sql="INSERT INTO volunteer(username,password)VALUES('$email','$password')";

if (mysqli_query($conn, $sql)) {

    ?>
    <html> <script> alert('Data added Successfully!!!');
     window.location="volunteer.html" </script> </html>

    <?php

}else{
    
    echo 'Error: ' .$sql .'<br>' .
    mysqli_error($conn);
}


?>