<?php
// Email validation


// captures the input with the name attribute with a value of email
$email = $_POST['email'];     //filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

// checks if the email input is empty
if (empty($email)) {

  // prompts the user on the html page to input email
  $email_error = "Please enter email";

  // validates the email and runs the code in the elseif block if email passes validation
} elseif (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
  include('dbconnection.php');
} else {
  // email failed validation and user is prompted
  $email_error = "Email is invalid please input valid email";
}



include('index.php');
   // header("Location: ../index.html?subscribe=success");
   // echo "Your information was added to the database.";
