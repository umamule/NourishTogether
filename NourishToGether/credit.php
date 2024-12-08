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

$cardNumber = $_GET['cardNumber'];
$expiryDate = $_GET['expiryDate'];
$cvv = $_GET['cvv'];

$sql = "INSERT INTO credits(cardNumbe,expiryDate,cvv) VALUES ('$cardNumber','$expiryDate','$cvv')";

if (mysqli_query($conn, $sql)) {

    ?>
    
    <html> <script> 
    alert('Data added Successfully!!!'); 
    window.location="credit.html" 
    </script> </html>

    <?php

}else{
    
    echo 'Error: ' .$sql .'<br>' .
    mysqli_error($conn);
}
?>