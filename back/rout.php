<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$url = $_POST['url'];
$textarea = $_POST['textarea'];

if (empty($textarea)) {
    echo "Enter a text message";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Enter a valid email address";
}
