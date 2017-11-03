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


$sender = $email;
$recipient = 'christian@lampshoponline.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
echo "Message accepted";
}
else
{
echo "Error: Message not accepted";
}


}

 ?>
