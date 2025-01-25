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
      echo "Please fill in all fields...";
      header("Refresh: 2; URL=http://localhost/wow/index.php");
      exit();
    }
}else{
  header("Refresh 2; URL=http://localhost/wow/index.php");
}



























// if($_SERVER["REQUEST_METHOD"] == "POST") {
//   $firstName = htmlspecialchars($_POST ["first_name"]);
//   $surName = htmlspecialchars($_POST["last_name"]);
//   $pet = htmlspecialchars($_POST["favorite_pet"]);

//   echo "This is my first name: $firstName";
//   echo "<br>";
//   echo "This is my last name: $surName";
//   echo "<br>";
//   echo "This is my favorite pet: $pet";

//   if (empty($firstName)) {
//     echo "First name is required. Redirecting...";
//     header("Refresh: 2; URL=http://localhost/wow/");
//     exit();
// }
  
//   header("Location: http://localhost/wow/");
 
// } else {
//   header("Location: http://localhost/wow/");
// }
