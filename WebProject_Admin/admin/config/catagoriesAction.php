<?php
include('connection.php');


if(isset($_POST['Upload']))
{
    $name = $_POST['c_Name'];
    $type = $_POST['Type'];
    $description = $_POST['description'];

   $file = "";
    
    $status = $_POST['status'];

    
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        $upload_dir = '../uploaded_products/';
        $Imagename = str_replace(' ', '-', $_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $Imagename);
        $file = $upload_dir . $Imagename;
    }


    $sql = "
    INSERT INTO `tbl_catagories`(`catagory_name`, `type`, `description`, `image_path`, `status`) VALUES ('$name','$type','$description','$file','$status')";


    $result = mysqli_query($con, $sql);


    if ($result) {
          header("location:..\catagories.php");
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "<pre>";

    } else {
        echo " not inserted";
    }



}


?>