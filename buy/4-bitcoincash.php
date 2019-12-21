<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153204352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153204352-1');
</script>
  <title>c-and-le</title>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153204352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
</script>
<script>
function FormSubmit() {
	if (grecaptcha.getResponse() == ""){
	    alert("please check the recaptcha");
	    return false;
	} else {
	    return true;
	}
}
</script>
  <link rel="shortcut icon" href="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc40d311094.jpg" type="image/x-icon" />
  <style>
    .navbar a.right {
      float: right;
    }   
    .navbar {
      //position: fixed;
      overflow: hidden;
      border: 2px solid #FF4500;
    }
    .navbar a {
      float: left;
      z-index: 1;
      display: block;
      color: #FF4500;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      font-family: Comic Sans MS; 
    }
   .shop-text {
     text-align: center;
   }
   .middle {
     text-align: center;
   }
   p {
	  font-family: Comic Sans MS; 
   }
  h1 {
	  font-family: Comic Sans MS; 
   }
  </style>
</head>
<body>
<!--title-->
<div class="navbar">
  <a href="/"><img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc40d311094.jpg" style=width:25px></a>
  <a href="/store.php">store</a>
  <a href="/about.php">about</a>
  <a href="/contact.php">contact</a>
  <a href="https://www.trepsed.com/" class="right">about trep$</a>
</div>
<?php
$product = $_GET['product'];
$color = $_GET["color"];
$number = floatval( $_GET['number']);
$email = $_GET['email'];
$payment = $_GET['payment'];
if($product === "original") {
  $price = $number * 0.0096 + 0.024;
}
else {
  $price = $number * 0.0144 + 0.024;
}
?>
<div class="middle">
<h1>send <?php echo $price;?> bitcoincash to <b>bitcoincash:qrn83ax3jnjwjqc4atm7l6f33y284k7s054a03la6e</b></h1>

<br>
<br>
<img src="https://chart.googleapis.com/chart?chs=300&300&cht=qr&chl=bitcoincash:qrn83ax3jnjwjqc4atm7l6f33y284k7s054a03la6e&choe=UTF-8" style="width:200px;">  
<br>
<hr>
<br>
<form method="post" action='/buy.php' onsubmit="return FormSubmit();">
<p>Email</p><input type="email" name="email">
<p>Full name</p><input type="text" name="fullname">
<p>Phone number</p><input type="number" name="phone">
<p>Country</p>
<select name="state">
<option value="US">United States</option>
</select>
<p>State</p>
<select name="state">
<option value="NJ">New Jersey</option>
</select>
<p>Address</p>
<input type="text" minlenth="5" name="address" >
<p>zip code</p>
<input type="number" max="99999" name="zip">
<div class="g-recaptcha" data-sitekey="6Lfxy8QUAAAAAMi1gYbTmz6hJGOwWFi6_oeJ59ok"></div>
<input type="hidden" name= "product" value= <?php echo $product;?>>
<input type="hidden" name= "color" value= <?php echo $color;?>>
<input type="hidden" name= "number" value= <?php echo $number;?>>
<input type="hidden" name= "payment" value= <?php echo $payment;?>>
<input type="submit" tabindex="3" value="make order" style="height:50px;width:80px"/>
<input type="reset" tabindex="3" value="reset" style="height:50px;width:80px;">
</form>
<p>if you don't give <?php echo $price; ?> bitcoin to <b>bitcoincash:qrn83ax3jnjwjqc4atm7l6f33y284k7s054a03la6e</b> you can't get candle</p>
<p>price will include shoping price</p>
</div>
<form class="shop-text">
  <input type="button" value="Go back!" onclick="history.back()">
</form>
<hr>
<p>&copy 2019. Inpyo Lee(www.c-and-le.tk) all rights reserved</p>
</body>
