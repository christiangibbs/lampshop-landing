<?php
$formError = $nameError = $businessError = $industryError = $productsError = $numberError = $emailError = $messageError = "";
// Forgot password
if(isset($_POST['btnSubmit'])) {
  $errors = 0;

  if(empty($_POST['name'])) {
    $nameError = "Name is required.";
    $errors += 1;
  } else {
    $name = $_POST['name'];
  }

  if(empty($_POST['business'])) {
    $businessError = "Business Name is required.";
    $errors += 1;
  } else {
    $business = $_POST['business'];
  }

  if(empty($_POST['industry'])) {
    $industryError = "Industry is required.";
    $errors += 1;
  } else {
    $industry = $_POST['industry'];
  }

  if(empty($_POST['products'])) {
    $productsError = "Please select the Products & Services you are interested in.";
    $errors += 1;
  } else {
    $products = $_POST['products'];
  }

  if(empty($_POST['number'])) {
    $numberError = "Phone Number is required.";
    $errors += 1;
  } else {
    $number = $_POST['number'];
  }

  if(empty($_POST['email'])) {
    $emailError = "Email is required.";
    $errors += 1;
  } else {
    $email = $_POST['email'];
  }

  if(empty(htmlspecialchars($_POST['message']))) {
    $messageError = "Message is required.";
    $errors += 1;
  } else {
    $message = htmlspecialchars($_POST['message']);
  }

  if($errors == 0) {
    submit($name, $business, $industry, $products, $number, $email, $message);
  } else {
    $formError = "There are " . $errors . " errors in your submission";
  }

}

function submit($name, $business, $industry, $products, $number, $email, $message) {

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $rob = "rob@lampshoponline.com";
      $pete = "p.wiseman@lampshoponline.com";
      $christian = "christian@lampshoponline.com";

      $headers .= 'From: <' . $email . "> \r\n";
      $subject = "Business Enquiries";
      $messageBody =
      "Hello,\r\n \r\n
      My name is " . $name . " and I am from the company " . $business . " which is in the " . $industry . " industry. \r\n
      We are interested in the following products: " . $products . ". Please can you contact me on either this email, or the following number: " . $number . ". " .
      $message;

      if(mail($christian, $subject, $messageBody, $headers)) {
        echo "Mail Sent";
      } else {
        echo "Error Sending Mail";
      }

}

 ?>
