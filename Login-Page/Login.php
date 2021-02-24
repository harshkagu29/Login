
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="new.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="main">

      <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="post" action="login_check.php">
          <h2 class="form_title title">Create Account</h2>
          <div class="form__icons">
              <img class="form__icon" src="733547.svg" alt="facebook">  
              <img class="form__icon" src="1384060.svg" alt="youtube">
              <img class="form__icon" src="1384065.svg" alt="twitter">
              <img class="form__icon" src="2111432.svg" alt="github">
              <img class="form__icon" src="1409946.svg" alt="instagram">
          </div>
          <span class="form__span">or use email for registration</span>
        
          <input class="form__input" type="text" name="name" id="name" placeholder="Name" required>
          <input class="form__input" type="text" name="email" id="email" placeholder="Email" required> 
          <input class="form__input" type="password" name="password" id="password" placeholder="Password" required>
          <input type="hidden" name="type" id="type" value="registration">
          <button type="submit" class="form__button button">Submit</button>
        </form>
      </div>

      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="post" action="login_check.php">
          <h2 class="form_title title">Sign in to Website</h2>
          <div class="form__icons">
            <img class="form__icon" src="733547.svg" alt="facebook">  
            <img class="form__icon" src="1384060.svg" alt="youtube">
            <img class="form__icon" src="1384065.svg" alt="twitter">
            <img class="form__icon" src="2111432.svg" alt="github">
            <img class="form__icon" src="1409946.svg" alt="instagram">
          </div>
          <span class="form__span">or use your email account</span>
          <i class="fas fa-user"></i><input class="form__input" type="text"  name="email" id="email" placeholder="Email" required>
          <input class="form__input" type="password" name="password" id="password" placeholder="Password" required>
          <input type="hidden" name="type" id="type" value="login">
          <a href="#">Forget Password?</a>
          <button class="form__button button">SIGN IN</button>
        </form>
      </div>

      <div class="switch" id="switch-cnt">
        <img src="light-blue-vector-low-poly-crystal-background-polygon-design-pa.jpg">

        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>

        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">
            To keep connected with us please login with your personal info
          </p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>

        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello !</h2>
          <p class="switch__description description">
            Enter your personal details and start journey with us
          </p>
          <button class="switch__button button switch-btn">SIGN UP</button>
        </div>

      </div>

    </div>
   
    <script src="new.js"></script>
  </body>
</html>


