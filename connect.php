

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
  <script src="https://kit.fontawesome.com/9acafcca7d.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div id="nav" class="main">
      <div class="home">
        <ul>
          <li class="active"><a href="coast.web/homePage/home.php"><i class="fa fa-home"></i> Home</a></li>
        </ul>
      </div>
      <ul class="list-two">
        <li class="active"><a href="/home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Company</a></li>
        <li><a href="connect.php">Register</a></li>
        <li><a href="#">Groups</a></li>
        <li><a href="#">Services</a></li>
      </ul>


      <div class="locations">

        <div id="drop-down"><a href="#"><i class="fa fa-caret-down"></i>locations</a></div>

        <div id="sub-menu" class="sub-menu">
          <ul id="browse">
            <li><a href="#">Mombasa</a></li>
            <li><a href="#">Malindi</a></li>
            <li><a href="#">Lamu</a></li>
            <li><a href="#">Kilifi</a></li>
            <li><a href="#">Nyali</a></li>
            <li><a href="#">Diani</a></li>
            <li><a href="#">Bamburi</a></li>
          </ul>
        </div>
      </div>

      <div id="close">
        <i id="menu" class="fa-solid fa-bars"></i>
        <i id="cross" class="fa-solid fa-xmark"></i>
      </div>

    </div>
  </header>


   <ul id="list" class="list-one">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Company</a></li>
        <li ><a href="/connect.php">Register</a></li>
        <li><a href="#">Groups</a></li>
        <li><a href="#">Services</a></li>
      </ul>

   <div class="title">
      <h1>THE COAST</h1>
    </div>
    <div id='fun' class="button">
      <a id="fun1" href="#" class="btn">VISIT THE COAST</a>
      <a id="fun2" href="#" class="btn">BOOK HOTEL</a>
      <a  href="#" class="btn">LEARN MORE</a>
    </div>

  <main class="register">
    <div class="reg-container">
        <h3>&#128166; Register and explore the Coast  &#128166;</h3>
        <br>
      <form action="register.php" method="post">
        <!-- <script>alert('Welcome to Registration Page! click Ok to Proceed')</script> -->
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
        <select name="locations" id="locations" autocomplete="on" required autofocus >
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
 <script src="index.js" type="text/javascript"></script>
</body>
</html>