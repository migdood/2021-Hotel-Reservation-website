<?php
  include_once 'make-res-php.inc.php';
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$passportnum = $_POST['passportnum'];
$country = $_POST['country'];
$city = $_POST['city'];

  $sql = "INSERT INTO respg (fname, sname, email, passnum, country, city) VALUES ('$firstname',	'$secondname', '$email', '$passportnum ', '$country ', '$city');";
  mysqli_query($conn, $sql);

 header("Location: ../make-reservation.php?reservation=success");
