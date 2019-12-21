<!--
<?php
/*
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$message = $_GET['message'];
*/
?>
<img src="https://i.gifer.com/YCZH.gif">
<form method="get" name="form" action="/email-contact-1.php">

<input type="hidden" name= "name" value= <?php echo $name;?>>
<input type="hidden" name= "phone" value= <?php echo $phone;?>>
<input type="hidden" name= "email" value= <?php echo $email;?>>
<input type="hidden" name= "message" value= <?php echo $message;?>>
<script>document.form.submit();</script>

</form>
<meta http-equiv='refresh' content='0;url=/email-contact-1.php'>
-->
<?php
include_once('email.php');
$name = $_POST['name'];
$name = str_replace("+", " ", $name);
$phone = $_POST['phone'];
$phone = str_replace("+", " ", $phone);
$email = $_POST['email'];
$message = $_POST['message'];
$message = str_replace("+", " ", $message);
$story = $name . "," . $phone . "," . $email . "," . $message;
$title = "contact(c-and-le.tk)";
mailer("info@c-and-le.tk","the3countrys@naver.com","mynameispyo@gmail.com",$title,$story);
?>
<script>alert('Yor reqeust successfully send it');</script>
<meta http-equiv='refresh' content='0;url=/'>