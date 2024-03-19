<?php

$connection = mysqli_connect('localhost', 'root', '', 'tours');

if(isset($_POST['sendBtn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "insert into contact_form(userName,email,phone,message)
              values ('$username','$email','$phone','$message')";

    mysqli_query($connection,$query);

    /*redirect korte */ 
    header('location: ../contactus.php');

}else{
    echo 'Something Went Wrong! Please Try Again';
}


?>