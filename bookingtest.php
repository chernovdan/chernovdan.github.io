<!doctype html>
<html>
<head>
</head>
<body>
	<?php

	$name = $_POST['name'];
	$tel = $_POST['number'];
	$email = $_POST['email'];
	$arrivalDate = $_POST['arrivaldate'];
	$departureDate = $_POST['departuredate'];
	$guests = $_POST['guests'];

	$to      = 'hola@lavidasinlimites.com';
	$subject = 'Новое бронирование';
	$message = "Новое бронирование от " . $name . "\r\n Тел " . $tel . "\r\n Email " . $email . "\r\n Прибывает " . $arrivalDate . " Уезжает " . $departureDate . "\r\n Количестов гостей " . $guests;

	mail($to, $subject, $message);
	?>
</body>
</html>