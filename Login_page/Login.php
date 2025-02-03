<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Airbnb Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://www.logolynx.com/images/logolynx/7c/7c2b66fa4d6acd7f2e3558fe807f2986.png"
    />
    <link rel="stylesheet" href="login.css" />
  </head>

  <body>
    <div id="loader">
      <div class="spinner"></div>
    </div>
    <div class="mainbody" id="mainContent">
      <div class="nav">
        <p style="color:black;font-weight:550;font-size: 32px;" id="mainlogo">Airbnb<i
          class="fa-brands fa-airbnb fa-xl"
          style="color: #FF5A60; padding-left: 5px; text-shadow: 0 0 2px white;"
        ></i></p>
        <div id="nav1" style="padding-left: 540px;">
          <a href="/Airbnb_website/Home_page/Home_page.php" style="color: black;" target="_blank">Home</a>
        </div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">About</a></div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">Services</a></div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">Contact</a></div>
      </div>
      
      <div id="login_credentials">
        <div style="font-size: 70px; padding-left: 115px; padding-top: 25px">
          <i
            class="fa-brands fa-airbnb fa-xl"
            style="color: white; text-shadow: 0 0 20px #FF5A60"
          ></i>
        </div>
        <div id="logintxt" style="margin-top: 4px"><p>Login</p></div>
        
        <!-- Login Form -->
        <form id="loginForm" action="authenticate.php" method="POST">
          <div>
            <input type="email" placeholder="    Email" name="email" id="email" required />
          </div>
          <div style="margin-top: 3px">
            <input type="password" placeholder="   Password" name="password" id="password" required />
          </div>
          <div id="lgn" style="margin-top: 19px; width:280px; margin-left:16px;">
            <input type="submit" value="Login" name="submit" id="loginButton" style="padding-right: 10px;"/>
          </div>
        </form>

        <div id="button" style="border-style: none;">
          <a href="" style="text-decoration: none; color: black; font-size: 16px;">Forgot Password ?</a>
        </div>
        <div id="h" style="margin-top: 15px; border-style: none; margin-left: 73px;">
          <p style="font-size: 14px;">Don't have an account?
            <a href="/Airbnb_website/Signup_page/Signup.php" target="_blank" style="text-decoration: none; color: black"> Sign Up</a>
          </p>  
        </div>
      </div>
    </div>
  </body>
</html>
