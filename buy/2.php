<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153204352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153204352-1');
</script>
  <title>c-and-le</title>
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
   input[type='radio'] { transform: scale(2); }
   p {
	  font-family: Comic Sans MS; 
   }
  h1 {
	  font-family: Comic Sans MS; 
   }
  </style>
</head>
<body>
<?php
$product = $_GET['product'];
$color = $_GET["color"];
$number = $_GET['number'];
?>
<!--title-->
<div class="navbar">
  <a href="/"><img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc40d311094.jpg" style=width:25px></a>
  <a href="/store.php">store</a>
  <a href="/about.php">about</a>
  <a href="/contact.php">contact</a>
  <a href="https://www.trepsed.com/" class="right">about trep$</a>
</div>
<form method="get" action="/buy/4-check.php" class="shop-text" class="corner">
<h1>enter choose payment</h1>

<input type="hidden" name= "product" value= <?php echo $product;?>>
<input type="hidden" name= "color" value= <?php echo $color;?>>
<input type="hidden" name= "number" value= <?php echo $number;?>>
  <input type="radio" checked="checked" name="payment" value="paypal"><img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc439514cd2.png" style="width:100px;" />
  <br>
  <br>
  <input type="radio" name="payment" value="bitcoin"> <img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc43a328a18.png" style="width:100px;">
  <br>
  <br>
  <input type="radio" name="payment" value="dash"> <img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc43483a734.png" style="width:100px;">
  <br>
  <br>
  <input type="radio" name="payment" value="bitcoincash"> <img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc430f6b4a3.png" style="width:100px;">
  <br>
  <br>
<input type="submit" tabindex="3" value="next" style="height:50px;width:80px"/><input type="reset" value="reset" style="height:50px;width:80px">
</form>
<br>
<form class="shop-text">
  <input type="button" value="Go back!" onclick="history.back()">
</form>
<hr>
<p>&copy 2019. Inpyo Lee(www.c-and-le.tk) all rights reserved</p>
</body>
