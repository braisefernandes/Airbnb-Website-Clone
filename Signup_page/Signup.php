<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Airbnb SignUp</title>
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
    <link rel="stylesheet" href="val.css" />
    <script src="validate.js"></script>
  </head>

  <body>
    <div class="mainbody" id="mainContent">
      <div class="nav">
        <p style="color:black;font-weight:550;font-size: 32px;" id="mainlogo">
          Airbnb
          <i
            class="fa-brands fa-airbnb fa-xl"
            style="color: #FF5A60; padding-left: 5px; text-shadow: 0 0 2px white;"
          ></i>
        </p>
        <div id="nav1" style="padding-left: 540px;">
          <a href="/Airbnb_website/Home_page/Home_page.php" style="color: black;" target="_blank">Home</a>
        </div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">About</a></div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">Services</a></div>
        <div><a href="" style="padding-left: 20px; color: black; text-decoration: none;">Contact</a></div>
      </div>

      <div id="signup_credentials">
        <div style="font-size: 70px; padding-left: 115px; padding-top: 25px">
          <i
            class="fa-brands fa-airbnb fa-xl"
            style="color: white; text-shadow: 0 0 20px #FF5A60"
          ></i>
        </div>
        <div id="signuptxt" style="margin-top: 4px">
          <p>Sign Up</p>
        </div>
        <form id="signupForm" action="insert.php" method="POST">
          <div>
            <input type="text" placeholder="         Full Name" name="full_name" id="fullName" />
          </div>
          <div style="margin-top: 1px">
            <input type="email" placeholder="         Email" name="email" id="email" oninput="checkUsername()"/>
            <div id="message" style="margin-left:40px; margin-top: 4px;"></div>
          </div>
          <div style="margin-top: 1px">
            <input type="password" placeholder="        Password" name="password" id="password" />
          </div>
          <div style="margin-top: 1px">
            <input type="password" placeholder="        Confirm Password" id="confirmPassword" />
          </div>
          <div id="bn1" style="margin-top: 18px; width:100px; border: none; margin-left: 112px;">
            <input type="submit" value = "Signup" name="submit"  style="background-color: #ff385c;border: none; padding-right:5px;" onclick="return validateForm()">
          </div>
        </form>
        <div id="login" style="margin-top: 8px; margin-left: 47px;">
          <a href="/Airbnb_website/Login_page/Login.php" target="_blank" style="text-decoration: none; font-size: 16px; color: rgb(0, 0, 0);" >Already have an account? Log In</a>
        </div>
      </div>
    </div>
  </body>
</html>