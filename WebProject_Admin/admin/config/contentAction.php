<?php

include('connection.php');


if(isset($_POST['Upload']))
{
    $content_for = $_POST['content_for'];
    $content_head = $_POST['content_head'];

    $content = $_POST['content'];
    $content_type = $_POST['content_type'];


    $sql = "
    INSERT INTO `tbl_content`(`Content_for`,`Content_header`, `Content`, `Content_type`) VALUES ('$content_for','$content_head',' $content','  $content_type')";


    $result = mysqli_query($con, $sql);


    if ($result) {
          header("location:..\content.php");
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "<pre>";

    } else {
        echo " not inserted";
    }



}


?>
