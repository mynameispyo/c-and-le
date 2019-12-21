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
<script type="text/javascript">  function FormSubmit() { if (grecaptcha.getResponse() == ""){ alert("please check the reCAPTCHA"); return false; } else { return true; } } </script>
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
      }
    p {
      font-family: Comic Sans MS; 
    }
    h1 {
      font-family: Comic Sans MS; 
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
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
  <p>message</p><textarea name="message" rows="5" minlength="5"></textarea>
  <br>
  <br>
  <div id="html_element"></div>
  <p>Please click the reCAPTCHA</p>
  <div class="g-recaptcha" data-sitekey="6Lfxy8QUAAAAAMi1gYbTmz6hJGOwWFi6_oeJ59ok"></div>
  <input type="submit" tabindex="3" value="post" style="height:50px;width:80px"/><input type="reset" value="reset" style="height:50px;width:80px">
  <div class="loader"></div>
</form>
<hr>
<p>&copy 2019. Inpyo Lee(www.c-and-le.tk) all rights reserved</p>
</body>
</html>