

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@AllasheCoast.web</title>
  <link rel="icon" type='xtype/images' href="images/pexels-photo-533851.jpeg">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="footer.css">
  <script src="https://kit.fontawesome.com/9acafcca7d.js" crossorigin="anonymous"></script>
</head>
<body>
  
  <header>
    <div class="active">
      <button class='btn1'>
        <a href="home.php"><i class="fa fa-home"></i> Home</a>
      </button>
    </div>
    <ul class="list-two">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="connect.php">Register</a></li>
        <li><a href="#">Services</a></li>
      </ul>
      <i id="pope" class="fa-solid fa-bars"></i>
  </header>      

    <ul class="view">
        <div><span>&times;</span></div>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="connect.php">Register</a></li>
        <li><a href="#">Services</a></li>
      </ul>


      <!-- marquee -->
  <div class="marquee">
    <marquee width="98%" direction="left" height="100%" behavior="scroll" scrollamount="5" loop="10000">The coastal regions i.e. the coast of Kenya are very nice places to visit especially during the holidays. The beaches have very nice aesthetic beauty. Register to get started and book your hotels prier🥳.Accomodations are there in plenty&#128150;  &#128519; 🥳</marquee>
  </div>


  <!-- sign in page -->
    <div class="direct">
        <p>Already have an Account?</p>
        <a id="sign"><button>Sign In</button></a>
        <p>Don't have an Account?</p>
        <a href="connect.php"><button>Register</button></a>
    </div>
     
    <!-- sign in -->
        <div class="proceed">
          <form action="#" method="post">
            <div class="pro1">
                <label for="email2">Enter your email</label>
                <input title="Enter your Email" type="email" name="email2" required autofocus autocomplete="on">
            </div>
            <div class="pro2">
                <label for="email">Enter your Password</label>
                 <input title="password" type="password" name="password" minlength="6" inputmode="numeric" maxlength="14" size="14" autocomplete="on" required autofocus id="password">
            </div>
            <button id="submit" type="submit" onclick="window.open('./Coast-pages/More-pages/Mombasa/mombasa.php')">Sign In</button>
            <!-- <button id="submit" type="submit" onclick="window.location='./Coast-pages/More-pages/Mombasa/mombasa.php'">Sign In</button> -->
          </form>
        </div>
    <!-- blinker -->
    <div id="blink" class="blink">
      <p>welcome to the beautiful Coasts &#128166;</p>
    </div>

    <!-- footer -->

    <footer id="bottom" class="bottom">
      <div class="footer__logo">
                <a href="#" id="footer__logo">
                  <i class="fas fa-gem">ALLANITY</i></a>
        </div>
      <p  id="web-rights" class="website__rights">
              <span id="dot" class="dot">&copy;</span> @allashe.com 2023. All rights reserved.
      </p>
      <div class="social__icons">
          <a href="/" class="social__icon-link" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="/" class="social__icon-link" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="/" class="social__icon-link" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="/" class="social__icon-link" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="/" class="social__icon-link" target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
      </div>
    </footer>
    <script src='home.js' type='text/javascript'></script>
</body>
</html>