<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$errors=0;
$errorMsg = "";

if ($name == "") {
    $errors = 1; $errorMsg += "Please enter your name.";
}
if ($email == "") {
    $errors = 1; $errorMsg += "Please enter your email.";
}
if ($subject == "") {
    $errors = 1; $errorMsg += "Please enter a subject.";
}
if ($message == "") {
    $errors = 1; $errorMsg += "Please enter a message.";
}

if ($errors == 0) {
    echo "The message you sent contained: Name: $name, Email: $email, Subject: $subject, Message: $message";
} else {
    echo $errorMsg;
}

?>