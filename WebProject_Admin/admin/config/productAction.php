<?php
include('connection.php');


if(isset($_POST['Upload']))
{
    $name = $_POST['p_Name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

   $file = "";
    
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        $upload_dir = '../uploaded_products/';
        $Imagename = str_replace(' ', '-', $_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $Imagename);
        $file = $upload_dir . $Imagename;
    }


    $sql = "INSERT INTO `tbl_products`(`name`, `price`, `description`, `image_path`, `quantity`, `status`) VALUES ('$name','$price','$description','$file','$quantity','$status')";


    $result = mysqli_query($con, $sql);


    if ($result) {
          header("location:..\addProducts.php");
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "<pre>";

    } else {
        echo " not inserted";
    }



}


?>