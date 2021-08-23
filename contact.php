<?php


if($_POST["subject"]) {


mail("s.valman@hotmail.co.uk", "Stage Zero: Contact us",


$_POST["insert your message here"]. "From: s.valman@hotmail.co.uk");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Sample HTML Form -->
<form method="post" action="contact.php">
<textarea name="message"></textarea>
<input type="submit">
</form>  
</body>
</html>
