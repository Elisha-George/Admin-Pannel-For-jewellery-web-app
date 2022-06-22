<?php

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];


   

$select= "select * from signup where email = '$Email'  && password = '$Password' ";
//echo($select);

$result = mysqli_query($con, $select);



if (mysqli_num_rows($result) > 0){
    $error[]= 'The user is already exist';
    
}   
// and if password is equls to confirm pasword
else {

    $insert ="INSERT INTO signup(firstName, lastName, email, password) 
    VALUES ('$FirstName','$LastName','$Email','$Password')";
    mysqli_query ($con, $insert);

    if(mysqli_query($con,$insert))
    {
        echo "inserted";
    }
    else{
        echo "not inserted";
    }
}


}




?>