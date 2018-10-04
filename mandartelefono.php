<!DOCTYPE html>
<html>
<body>

<?php

$telefono = $_POST['telefono'];
$to = "hola@kisswebs.com";
$subject = "Nuevo lead";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($telefono,$to,$subject,$txt,$headers);

?>

</body>
</html>