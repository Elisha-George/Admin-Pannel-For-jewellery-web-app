<?php
$servername= 'localhost';
$username='root';
$password='';
$database='web_project';

$con=mysqli_connect($servername, $username,$password,$database);

if(!$con)
{
    // redirecting to errpe page

    header('location: ../errors/db.php');

    die();

    // OR
    // die(mysqli_connect_errno($con)); to get php error  
}
else{

    ?>
    <script>
    alert("connection Successfull!!!");

    </script>

    <?php
}

?>