<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153204352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153204352-1');
</script>
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
    }
   .shop-text {
     text-align: center;
   }
   .middle {
     text-align: center;
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
$number = $_GET['number'];
$email = $_GET['email'];
$payment = $_GET['payment'];
?>
<form method=get name=form action=
<?php
if ($payment === 'bitcoin') {
  echo '"/buy/4-bitcoin.php">';
}
if ($payment === 'paypal') {
  echo '"/buy/4-paypal.php">';
}
if ($payment === 'market') {
  echo '"/buy/4-market.php">';
}
if ($payment === "dash") {
  echo '"/buy/4-dash.php">';
}
if ($payment === "bitcoincash") {
  echo '"/buy/4-bitcoincash.php">';
}
?>
<input type="hidden" name= "product" value= <?php echo $product;?>>
<input type="hidden" name= "color" value= <?php echo $color;?>>
<input type="hidden" name= "number" value= <?php echo $number;?>>
<input type="hidden" name= "email" value= <?php echo $email;?>>
<input type="hidden" name= "payment" value= <?php echo $payment;?>>
<script>document.form.submit();</script>

</form>
<meta http-equiv='refresh' content='0;url=/buy/1.php'>

