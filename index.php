<html>
<head>
<script data-ad-client="ca-pub-7412478711619182" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<meta charset="utf-8">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153204352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153204352-1');
</script>
<script type="text/javascript">  function FormSubmit() { 
  if (grecaptcha.getResponse() == ""){ 
    alert("please check the reCAPTCHA"); return false; 
    } else { 
      return true; 
      } 
  } </script>
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
    #main-picture {
      //position: absolute;
      z-index: 1;
      width: 100%;
      <?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
if ($android || $bberry || $iphone || $ipod || $webos== true) 
{ 
  echo "";
}else {
  echo "height: 100%";
}
?>
    }
    #main-title {

      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      font-size: 100px;
    }
    #store-title {
      text-align: center;
    }
    .img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 300px;
      top: 50%;
      left: 50%;      
    }
    .shop-text {
      text-align: center;
    }
    .two {
      background-color: rgb(240, 240, 240);
      clear: both;
    }
    .treps {
      float:right;
    }
    #products {
      float:left;
    }
    #or {
      margin-left:5px;
      float:left;
    }
    #about {
      clear: both;
    }
    #sign {
      /*
      -webkit-transform:rotate(180deg);
      -moz-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      -o-transform: rotate(180deg);
      transform: rotate(180deg);
      */
      width: 50%;
    }
    #poster {
      float:right;
      width:30%;
      /*
      -webkit-transform:rotate(90deg);
      -moz-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -o-transform: rotate(90deg);
      transform: rotate(90deg);
      */
    }
   p {
	  font-family: Comic Sans MS; 
   }
  h1 {
	  font-family: Comic Sans MS; 
   }
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js" ></script>
<script type="text/javascript"src="https://www.penca.cf/ads/codes/ads/clicks.js"></script>
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
<!--title img-->
<img id="main-picture" src="https://cdn-cms.f-static.com/uploads/2696757/2000_5ddec58f747d2.jpg">
      <?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
if ($android || $bberry || $iphone || $ipod || $webos== true) 
{ 
  echo "";
}else {
  echo "<h1 id='main-title'>c-and-le</h1>";
}
?>
<!--products and trep$-->
<h1 id="store-title">Our poducts(click image)</h1>
<div >
  <a href="product/original.php"><img  class='img' src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb85bd8fb1.jpg"></a>
  <p class="shop-text">original candle <strong>$2</strong><p>
  <a href="product/Christmas-tree-candle.php"><img  class='img' src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb875e182a.jpg"></a>
  <p class="shop-text">Christmas tree candle <strong>$3</strong><p>
  <a href="product/Snow-Flower-shape-candle.php"><img  class='img' src="https://cdn-cms.f-static.com/uploads/2696757/1600_5dccb88aa6ed1.jpg"></a>
  <p class="shop-text">Snow Flower shape candle <strong>$3</strong><p>
</div>
<!--<p id = "or">OR, go to the Trep$ market on December 3rd 2019!</p>
<div style="width: 50%;" class="treps">
  <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Tenakill%20Middle%20School%2C%20High%20Street%2C%20Closter%2C%20NJ+(Trep%24%20market)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">find my coordinates</a></iframe>
</div>-->
<!--about-->
<div class="two">
<div id="about">
<h1 class="shop-text">About</h1>
<p class="shop-text">Have a nice winter by Cheap-And-LEast price CANDLE.😀</p>
<fieldset class="shop-text"><legend>Do You Know</legend>
<p>Do you know why it is c-and-le? Because our products are <b>CH</b>eap <b>AND</b> <b>LE</b>ast price</p></fieldset>
<fieldset class="shop-text"><legend>Do You Know</legend>
<p>Do you know why it is not .com? Because I learning in <strong>T</strong>ena<strong>K</strong>ill -> TK middle school</p></fieldset>
<!--<img src="https://lh4.googleusercontent.com/yF-7cSF_eYrkxlRz7bT5MCzkZtbRJWLT7ra1y1CsGSycOLXsLMOEsYOUqXA1fusR60iS5l5_-TTIyau63RzBRvEPEk3v6hQR3gk5mpQFg2YuqSLp48fG=w1280" id='poster'>-->
<br>
<br>
</div>
</div>
<br>
<div class="btn_word"><fieldset style="float:right;position:fixed;z-index:2;bottom: 0;right: 0;" ><legend>ADS</legend><button class="btn_hide" style="padding:3px">hide</button><iframe  frameborder="0" src="https://www.penca.cf/ads/codes/ads/5-6.php" style="overflow:hidden;width:360px;height:270px;float:right;"></iframe></fieldset></div>
<!--contact-->
<h1 class="shop-text">contact with us</h1>
<form method="post" action="/email-contact.php" class="shop-text" onsubmit="return FormSubmit()";>
  <p>name</p><input type="text" name= "name" minlength="3">
  <br>
  <br>
  <p>email</p><input type="email" name="email">
  <br>
  <br>
  <p>phone</p><input type="text" name="phone" minlength="9">
  <br>
  <br>
  <p>message</p><textarea name="message" rows="5" minlength="5"style="max-width:173px;"></textarea>
  <br>
  <br>
  <div id="html_element"></div>
  <p>Please click the reCAPTCHA</p>
  <div class="g-recaptcha" data-sitekey="6Lfxy8QUAAAAAMi1gYbTmz6hJGOwWFi6_oeJ59ok"></div>
  <input type="submit" tabindex="3" value="post" style="height:50px;width:80px"/><input type="reset" value="reset" style="height:50px;width:80px">

</form>
<hr>
<p>&copy 2019. Inpyo Lee(www.c-and-le.tk) all rights reserved</p>
</body>
</html>