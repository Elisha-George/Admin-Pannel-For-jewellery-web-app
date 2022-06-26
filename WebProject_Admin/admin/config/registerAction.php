<?php

include('connection.php');


if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];


$select= "select * from tbl_admin where email = '$email'  && password = '$password' ";
//echo($select);

$result = mysqli_query($con, $select);



if (mysqli_num_rows($result) > 0){
    $error[]= 'The user is already exist';
    echo($error);
    
}   
// and if password is equls to confirm pasword
else{

    if($password==$confirmPassword)
    {

    $insert ="INSERT INTO `tbl_admin`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
  $res =  mysqli_query ($con, $insert);

    if($res)
    {
        
        header('location:../login.php');
    }
    else{
        echo "not inserted";
    }
   
}
else{
    $error[]= 'Your Password Does not match';


    }
    
}


}




?>