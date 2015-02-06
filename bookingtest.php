<!doctype html>
<html>
<head>
</head>
<body>
<?php
$to      = 'hola@lavidasinlimites.com';
$subject = 'New booking';
$message = 'hello';

mail($to, $subject, $message);
?>
</body>
</html>