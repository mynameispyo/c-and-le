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
?>
<!--title-->
<div class="navbar">
  <a href="/"><img src="https://cdn-cms.f-static.com/uploads/2696757/400_5dfc40d311094.jpg" style=width:25px></a>
  <a href="/store.php">store</a>
  <a href="/about.php">about</a>
  <a href="/contact.php">contact</a>
  <a href="https://www.trepsed.com/" class="right">about trep$</a>
</div>
<form method="get" action="/buy/2.php" class="corner">
<div class="shop-text">
  <h1>choose you want to buy</h1>
  <input type="radio" 
  <?php if($product === "chrismas") {
    echo 'checked="checked"';
  } ?> checked="checked" name="product" value="Chrismastreecandle" style="width:100px;"><p>Chrismas tree candle</p><img src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb875e182a.jpg" style="width:10%;">
  <br>
  <br>
  <input type="radio" 
    <?php if($product === "original") {
    echo 'checked="checked"';
  } ?> name="product" value="original"><p>original</p><img src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb85bd8fb1.jpg" style="width:10%">
  <br>
  <br>
  <input type="radio" 
    <?php if($product === "snow") {
    echo 'checked="checked"';
  } ?> name="product" value="SnowFlowershapecandle"><p>Snow Flower shape candle</p><img src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb88aa6ed1.jpg" style="width:10%;">
  <br>
  <br>
  <input type="number" min="1" max="15" value="2" name="number"><p>choose number of candles</p>
  <br>
  <br>
  <select name="color">
    <option value="green">green</option>
    <option value="red" selected="selected">red</option>
    <option value="orange">orange</option>
    <option value="blue">blue</option>
</select>
<p>choose color</p>
<br>
<br>
  <input type="submit" tabindex="3" value="next" style="height:50px;width:80px"/><input type="reset" value="reset" style="height:50px;width:80px">
<br>
<br>
<p>price will be include $5(shipping fee)</p>
</form>
<form>
  <input type="button" value="Go back!" onclick="history.back()">
</form>
</div>
<hr>
<p>&copy 2019. Inpyo Lee(www.c-and-le.tk) all rights reserved</p>
</body>
