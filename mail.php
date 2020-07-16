<?php
$to      = "biuro@villatrojany.pl";
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = $_POST["email"];

mail($to, $subject, $message, $headers);
header('Location: villatrojany.pl');
?>
