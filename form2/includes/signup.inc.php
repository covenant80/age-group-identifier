<?php

if (isset($_POST["submit"])){
  echo "lol we wasted your time";

  $name = $_POST["uid"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $radio = $_POST["radio"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(UidExists($conn,$name,$email) !== false) {
    header("Location: ../login.php?error=userametaken");
    exit();
  }
  createUser($conn,$name,$email,$pwd,$radio);
}
else {
    header("Location: ../login.php");
    exit();

    
}
