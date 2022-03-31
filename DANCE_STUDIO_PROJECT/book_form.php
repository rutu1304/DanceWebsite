<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['class'];
      $guests = $_POST['concern'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['time'];

      $request = " insert into book_form(name, email, phone, address, class, concern, arrivals, time) values('$name','$email','$phone','$address','$class','$concern','$arrivals','$time') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>