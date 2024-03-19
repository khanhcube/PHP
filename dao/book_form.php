<?php

$connection = mysqli_connect('localhost', 'root', '', 'tours');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $whereTo = $_POST['whereTo'];
    $totalGuests = $_POST['totalGuests'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];

    $query = "insert into booking_form(email,whereTo,totalGuests,arrival,departure)
              values ('$email','$whereTo','$totalGuests','$arrival','$departure')";

    mysqli_query($connection,$query);

    /*redirect korte */ 
    header('location: ../model/book.php');

}else{
    echo 'Something Went Wrong! Please Try Again';
}


?>