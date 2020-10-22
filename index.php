<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
	<link href="img/favicon.png" rel="icon">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="logincheck.php" class="sign-in-form" method="POST">
              <h2 class="title"><img src ="img/logo.png" height=80px width=170px></h2>
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text"    name="user"  autocomplete="off" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" autocomplete="off"/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="submit" />
              <p class="social-text"><a href="https://iamabhi.me/">Go Back to Home</a></p>
            <p class="social-text">Connect With Us:</p>
            <div class="social-media">
              <a href="https://www.facebook.com/abhishekh.dey"target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/abhishekh_dey"target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="mailto:abhishekh20.dey@gmail.com"target="_blank" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/in/abhishekh-dey/"target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="registration.php" class="sign-up-form"  method="POST">
              <h2 class="title"><img src ="img/logo.png" height=80px width=170px></h2>
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user" autocomplete="off"/>
            </div>
            <!--<div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div> -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" autocomplete="off" />
            </div>
            <input type="submit" class="btn" value="Sign up" name="submit" />
              <p class="social-text"><a href="https://iamabhi.me/">Go Back to Home</a></p>
            <p class="social-text">Connect With Us:</p>
            <div class="social-media">
              <a href="https://www.facebook.com/abhishekh.dey"target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/abhishekh_dey" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="mailto:abhishekh20.dey@gmail.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/in/abhishekh-dey/"target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Join us NOW to get a chance to work with the best Software Development Team.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log_la.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Amazing. Login to Awesomeness and Experience the Bliss of Intellect.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register_la.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
