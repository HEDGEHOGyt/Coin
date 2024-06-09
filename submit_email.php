<?php

// Get the email address from the POST data
$email = $POST['email'];

// Validate the email address
if (!filtervar($email, FILTERVALIDATEEMAIL)) {
  echo jsonencode([
    'success' => false,
    'error' => 'Неверный адрес электронной почты'
  ]);
  exit;
}

// Send the email address to the database
// ...

// Send a verification code to the email address
// ...

echo jsonencode(
  'success' => true
);

?>
