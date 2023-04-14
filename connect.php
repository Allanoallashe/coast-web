

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@Allashe/coding.com</title>
  <link rel="icon" type='xtype/images' href="images/pexels-photo-533851.jpeg">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="footer.css">
  <script src="https://kit.fontawesome.com/9acafcca7d.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-- nav bar -->
  <header>
    <div id="nav" class="main">
      <div class="home">
        <button class='btn2'>
          <a href="home.php"><i class="fa fa-home"></i> Home</a>
          </button>
      </div>
      <div class="title">
        <h1>THE COAST</h1>
      </div>
    </div>
  </header>

       <!-- registration form -->
  <main class="register">
    <div class="reg-container">
        <h3 id="h3">&#128166; Register and explore the Coast  &#128166;</h3>
        <br>
       <form action="register.php" method="post">
        <div class="input1">
        <label for="first-name" id="first-name">First Name:</label>
        <input title="first name" type="text" name="first-name" autocomplete="on" required autofocus  >
        </div>
        <br>

        <div class="input2">
        <label for="last-name" id="last-name">Last Name:</label>
        <input title="last name" type="text" name="last-name" autocomplete="on" required autofocus >
        </div>
        <br>

        <div class="input3">
        <label for="mail" id="email">Email:</label>
        <input title="email address"  type="email"name="email" autocomplete="on" required autofocus >
        </div>
        <br>

        <div class="input4">
        <label for="password" id="password">Password:</label>
        <input title="password" type="password" name="passwordNewUser" minlength="6" inputmode="numeric" maxlength="14" size="14" autocomplete="on" required autofocus id="passwordNewUser">
        <div class="toggle">
          <i id="slash" class="fa-solid fa-eye-slash"></i>
          <i id="view" class="fa-solid fa-eye"></i>
          </div>
        </div>
        <br>

        <div class="input5">
        <label for="number">Telephone:</label>
        <input title="phone number" type="text" name="number" autocomplete="on" required autofocus >
        </div>
        <br>

        <div class="input6">
        <label for="gender" id="gender">Gender:</label>
        
        <input title="gender" type="radio" name="gender" id="M" value="male" autocomplete="on" required autofocus >
        <label for="male" id="male">Male</label>
        
        <input title="gender" type="radio" name="gender" id="F" value="female" autocomplete="on" required autofocus >
        <label for="female" id="female">Female</label>
        
        <input title="gender" type="radio" name="gender" id="X" value="other" autocomplete="on" required autofocus >
        <label for="other" id="other">Other</label>
        </div>
        <br>
        
        <div class="selections">
        <label for="locations">Location:</label>
        <select title="choose location" name="locations" id="locations" autocomplete="on" required autofocus >
          <option selected hidden>Choose location</option>
          <option value="Nairobi">Nairobi</option>
          <option value="Kisumu">Kisumu</option>
          <option value="Eldoret">Eldoret</option>
          <option value="Nakuru">Nakuru</option>
        </select>
        </div>
        <br>

        <div class="input7" >
        <p><input title="Agree" type="checkbox" name="check" id="check" autocomplete="on" required autofocus> I agree by all the terms and conditions</p>
        </div>
        <br>
        <div class="sub-btn-container">
        <button type="submit" class="sub-btn">Register</button>
        </div>
      </form>

    </div>
  </main>

  <!-- footer -->
  <footer class="bottom2">
      <div class="footer__logo2">
                <a href="#" id="footer__logo2">
                  <i class="fas fa-gem">ALLANITY</i></a>
        </div>
      <p class="website__rights2">
              <span class="dot2">&copy;</span> @allashe.com 2023. All rights reserved.
      </p>
      <div class="social__icons2">
          <a href="/" class="social__icon-link2" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="/" class="social__icon-link2" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="/" class="social__icon-link2" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="/" class="social__icon-link2" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="/" class="social__icon-link2" target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
      </div>
    </footer>
 <script src="index.js" type="text/javascript"></script>
</body>
</html>