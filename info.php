<?php
// Email validation


// captures the input with the name attribute with a value of email
$email = $_POST['email'];     //filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

// checks if the email input is empty
if (empty($email)) {

  // prompts the user on the html page to input email
  $email_error = "<div class='server-output'>Please enter email</div>";

  // validates the email and runs the code in the elseif block if email passes validation
} elseif (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
  include('dbconnection.php');
  $email_error = "<div class='server-output'>Thank you for subscribing</div>";
} else {
  // email failed validation and user is prompted
  $email_error = "<div class='server-output'>Email is invalid please input valid email</div>";
}



include('index.php');
   // header("Location: ../index.html?subscribe=success");
   // echo "Your information was added to the database.";
