<?php
/*
$product = $_POST['product'];
$color = $_POST['color'];
$number = $_POST['number'];
$payment = $_POST['payment'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$address = $_POST['address'];
$zip = $_POST['zip'];
*/
?>
<!--
<img src="https://i.gifer.com/YCZH.gif">
<form method="post" name=form action="/buy-1.php">
<input type="hidden" name= "product" value= <?php echo $product;?>>
<input type="hidden" name= "color" value= <?php echo $color;?>>
<input type="hidden" name= "number" value= <?php echo $number;?>>
<input type="hidden" name= "payment" value= <?php echo $payment;?>>
<input type="hidden" name= "email" value= <?php echo $email;?>>
<input type="hidden" name= "fullname" value= <?php echo $fullname;?>>
<input type="hidden" name= "phone" value= <?php echo $phone;?>>
<input type="hidden" name= "country" value= <?php echo $country;?>>
<input type="hidden" name= "state" value= <?php echo $state;?>>
<input type="hidden" name= "address" value= <?php echo $address;?>>
<input type="hidden" name= "zip" value= <?php echo $zip;?>>
<script>document.form.submit();</script>
</form>
<meta http-equiv='refresh' content='0;url=/buy-1.php'>
-->
<?php
include_once('email.php');
$product = $_POST['product'];
$color = $_POST['color'];
$number = $_POST['number'];
$payment = $_POST['payment'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$story = 
"product:" . $product . "," .
"color:" . $color . "," . 
"number:" . $number . "," .
"email:" . $email . "," .  
"payment:" . $payment  . "," .
"fullname:" . $fullname ."," .
"phone:" . $phone . "," .
"address:" . $address . "," . 
"zip:" . $zip . "," ;
$title = "order(c-and-le.tk)";
mailer("info@c-and-le.tk","the3countrys@naver.com","mynameispyo@gmail.com",$title,$story);
?>
<script>alert('Yor reqeust successfully send it')</script>
<meta http-equiv='refresh' content='0;url=/'>