<?php


if($_POST["message"]) {


mail("s.valman@hotmail.co.uk", "Stage Zero: Contact us",


$_POST["insert your message here"]. "From: s.valman@hotmail.co.uk");


}


?>

<!-- Sample HTML Form -->
<form method="post" action="contact.php">
<textarea name="message"></textarea>
<input type="submit">
</form>