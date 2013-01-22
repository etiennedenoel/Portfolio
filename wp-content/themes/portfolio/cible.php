<?php
$TO = "etienne.denoel@gmail.com";
$h = "From: " . $TO;
$email = "email";
$message = "";
while (list($key, $val) = each($HTTP_POST_VARS)) {$message .= "$key : $val\n";}
mail($TO, $email, $message, $h);
Header("Location: http://www.etiennedenoel.be");
?>