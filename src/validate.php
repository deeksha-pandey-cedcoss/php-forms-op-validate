<?php

$name = $_POST['name'];
$email = $_POST['email'];
$conatct = ($_POST['contact']);
$oid = $_POST['oid'];
$address = $_POST['address'];
$date = $_POST['date'];
if (
    filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[0-9]{10}$/",  $conatct)
    && preg_match("/^([a-zA-Z' ]+)$/", $name)
) {
    echo "<h3>All the input fields are filled correctly</h3>";
} else {
    echo "<h3>Please fill all the details correctly</h3>";
}
