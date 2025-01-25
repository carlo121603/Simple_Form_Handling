<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $firstName = htmlspecialchars($_POST["firstName"]);
  $secondName = htmlspecialchars($_POST["secondName"]);
  $age = htmlspecialchars($_POST["age"]);

  echo "This is my first name: $firstName";
  echo "<br>";
  echo "This is my second name: $secondName";
  echo "<br>";
  echo "This is my age: $age";

    if(empty($firstName) || empty($secondName) || empty($age)){
      echo "<br>Please fill in all fields...Redirecting";
      header("Refresh: 2; URL=http://localhost/wow/index.php");
      exit();
    }
}else{
  header("Refresh 2; URL=http://localhost/wow/index.php");
}
