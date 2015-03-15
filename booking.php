<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
</head>

<body>
<?php
if (isset($_POST['book'])) {
	$to = 'hola@lavidasinlimites.com';
	$subject = 'New booking';
	$message = 'Name ' . $_POST['name'] . "\r\n\r\n";
	$message = 'Phone ' . $_POST['number'] . "\r\n\r\n";
	$message = 'Email ' . $_POST['email'] . "\r\n\r\n";
	$message = 'Arrival date ' . $_POST['arrivaldate'] . "\r\n\r\n";
	$message = 'Departure date ' . $_POST['departuredate'] . "\r\n\r\n";
	$message = 'Guests ' . $_POST['guests'] . "\r\n\r\n";

	mail('chernov.dan@gmail.com', 'test', $message);
}
?>


<h1>Your request has been transfered to the booking department. We contact you soon. Thanks!<h1>

<!--<h1>Ваш запрос предан в отдел бронирования. Мы свяжемся с Вами в ближайшее время. Спасибо!</h1>

<h1>Ошибка! Не могли бы Вы повторить запрос на брониорвание.<h1>-->

</body>
</html>