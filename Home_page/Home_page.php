<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Airbnb | Holiday rentals, cabins, beach houses & more</title>
  <link rel="shortcut icon" type="image/x-icon"
    href="https://www.logolynx.com/images/logolynx/7c/7c2b66fa4d6acd7f2e3558fe807f2986.png" />
  <link rel="stylesheet" href="home_page.css" />
</head>

<body>
  <div class="mainbody1">
    <div class="nav">
      <div id="main1">
        <i class="fa-brands fa-airbnb fa-xl" style="color: black; text-shadow: 0 0 10px #ff5a60"></i>
      </div>
      <div id="welcome-message">
        <?php
        session_start();

        if (isset($_SESSION['user_name'])) {
          echo '<p style="color:black; font-weight:bold;padding-top:37px;padding-right:100px;font-size: 20px; text-shadow: 0 10px 20px #ff5a60;
">Welcome, ' . $_SESSION['user_name'] . '!</p>';
        } else {
          echo '<a href="/Airbnb_website/Login_page/Login.php">Login</a>';
        }
        ?>
      </div>
      <div id="stex">
        <div id="stays">
          <a href="" style="font-size: 20px; text-decoration: none; color: black">Stays</a>
        </div>
        <div id="experience">
          <a href="" style="font-size: 20px; text-decoration: none; color: black">Experiences</a>
        </div>
      </div>

      <div id="nav11">
        <div id="nav12">
          <a href="" style="
                font-size: 17px;
                font-weight: 500;
                text-decoration: none;
                color: black;
              ">Airbnb your home</a>
        </div>
        <div id="nav13">
          <i style="font-size: 20px; padding-top: 10px" class="fa-solid fa-globe fa-lg"></i>
        </div>
        <div id="nav14">
          <i style="font-size: 20px; padding-top: 10px" class="fa-solid fa-bars fa-lg"></i>
        </div>
        <div id="nav15">
          <i style="font-size: 32px; padding-top: 10px" class="fa-solid fa-circle-user fa-lg"
            style="color: #9b9fa6"></i>
        </div>
      </div>
    </div>
    <div id="txt">
      <p style="color: lightgoldenrodyellow">
        Book a place that feels just like home.
      </p>
    </div>
    <div class="searchbar">
      <div id="txt1">
        <p>
          From cozy Cottages to modern appartments, find your perfect gateway
          with just a click. Experience the comfort of home, no matter where
          your travels take you.
        </p>
      </div>
      <div id="search">
        <div id="search1" class="search-item" style="position: relative; cursor: pointer;">
          <a href="" style="text-decoration: none; color: black">
            <p>Where</p>
            <p style="font-size: 14px; opacity: 0.8">Search Destinations</p>
          </a>
          <div id="dropdown1" class="dropdown">
            <span class="close-btn" onclick="closeDropdown('dropdown1')">&times;</span>
            <h3>Select Destination</h3>
            <input type="text" placeholder="Enter destination" />
            <button type="button">Search</button>
          </div>
        </div>
        <div id="search2">
          <a href="" style="text-decoration: none; color: black">
            <p>Check in</p>
            <p style="font-size: 14px; opacity: 0.8">Add dates</p>
          </a>
        </div>
        <div id="search3">
          <a href="" style="text-decoration: none; color: black">
            <p>Check out</p>
            <p style="font-size: 14px; opacity: 0.8">Add dates</p>
          </a>
        </div>
        <div id="search4">
          <a href="" style="text-decoration: none; color: black">
            <p>Who</p>
            <p style="font-size: 14px; opacity: 0.8">Add guests</p>
          </a>
        </div>
        <div id="search5">
          <a href=""><i class="fa-solid fa-magnifying-glass" style="
                  color: #ffffff;
                  font-size: 18px;
                  padding-left: 16px;
                  padding-top: 15px;
                "></i></a>
        </div>
      </div>
    </div>
  </div>

  <div id="icons">
    <div id="icon1" style="margin-left: 40px"><i class="fa-solid fa-icons"></i></div>
    <div id="icon1"><i class="fa-solid fa-ranking-star"></i></div>
    <div id="icon1"><i class="fa-solid fa-mountain-sun"></i></div>
    <div id="icon1"><i class="fa-solid fa-person-swimming"></i></div>
    <div id="icon1"><i class="fa-solid fa-golf-ball-tee"></i></div>
    <div id="icon1"><i class="fa-brands fa-hornbill"></i></div>
    <div id="icon1"><i class="fa-solid fa-house-flood-water"></i></div>
    <div id="icon1"><i class="fa-solid fa-sailboat"></i></div>
    <div id="icon1"><i class="fa-solid fa-tower-observation"></i></div>
    <div id="icon1"><i class="fa-solid fa-wine-glass"></i></div>
    <div id="icon1"><i class="fa-solid fa-snowflake"></i></div>
    <div id="icon1"><i class="fa-solid fa-gamepad"></i></div>
    <div id="icon1"><i class="fa-solid fa-table-tennis-paddle-ball"></i></div>
    <div id="icon1" style="margin-right: 47px"><i class="fa-solid fa-place-of-worship"></i></div>
  </div>

  <div class="mainbody2">
    <a href="/Airbnb_website/Home_page/detail1.php">
      <div id="container1">
        <div id="image1"></div>
        <div id="text1">
          <a href="" style="text-decoration: none; font-size: 16px; color: black">
            <pre
              style="font-size: 16px; padding-top: 7px;">Siolim,India                                 <i class="fa-solid fa-star"></i> 4.92</pre>
            <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
              71 Km to Bhagwan Mahaveer Sanctuary and..
            </p>
            <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
              2-7 Sep
            </p>
            <p style="padding-top: 5px"><b>₹5,158</b> night</p>
          </a>
        </div>
      </div>
    </a>

    <div id="container2">
      <div id="image2"></div>
      <div id="text2">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">North Goa,India                             <i class="fa-solid fa-star"></i> 5.0</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            67 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            9-14 Oct
          </p>
          <p style="padding-top: 5px"><b>₹4,579</b> night</p>
        </a>
      </div>
    </div>
    <div id="container3">
      <div id="image3"></div>
      <div id="text3">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Moira,India                                   <i class="fa-solid fa-star"></i> 4.87</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            67 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            3-8 Sep
          </p>
          <p style="padding-top: 5px"><b>₹10,242</b> night</p>
        </a>
      </div>
    </div>
    <div id="container4">
      <div id="image4"></div>
      <div id="text4">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Dabolim,India                                  <i class="fa-solid fa-star"></i> 4.9</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            63 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            8-13 Sep
          </p>
          <p style="padding-top: 5px"><b>₹3,138</b> night</p>
        </a>
      </div>
    </div>
    <div id="container5">
      <div id="image5"></div>
      <div id="text5">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Moira,India                                   <i class="fa-solid fa-star"></i> 4.87</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            67 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            3-8 Sep
          </p>
          <p style="padding-top: 5px"><b>₹10,242</b> night</p>
        </a>
      </div>
    </div>
    <div id="container6">
      <div id="image6"></div>
      <div id="text6">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Saligao,India                                   <i class="fa-solid fa-star"></i> 4.91</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            69 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            2-7 Sep
          </p>
          <p style="padding-top: 5px"><b>₹17,399</b> night</p>
        </a>
      </div>
    </div>
    <div id="container7">
      <div id="image7"></div>
      <div id="text7">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Nerul,India                                   <i class="fa-solid fa-star"></i> 4.87</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            66 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            4-9 Sep
          </p>
          <p style="padding-top: 5px"><b>₹6,644</b> night</p>
        </a>
      </div>
    </div>
    <div id="container8">
      <div id="image8"></div>
      <div id="text8">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Raia,India                                   <i class="fa-solid fa-star"></i> 4.89</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            46 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            4-9 Oct
          </p>
          <p style="padding-top: 5px"><b>₹4,565</b> night</p>
        </a>
      </div>
    </div>
    <div id="container9">
      <div id="image9"></div>
      <div id="text9">
        <a href="" style="text-decoration: none; font-size: 16px; color: black">
          <pre
            style="font-size: 16px; padding-top: 7px;">Marna,India                                   <i class="fa-solid fa-star"></i> 4.89</pre>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 7px">
            73 Km to Bhagwan Mahaveer Sanctuary and..
          </p>
          <p style="opacity: 0.7; font-size: 14px; padding-top: 3px">
            1-6 Sep
          </p>
          <p style="padding-top: 5px"><b>₹28,024</b> night</p>
        </a>
      </div>
    </div>
  </div>

  <footer>
    <div id="foot">
      <div id="info">
        <div style="padding-top: 27px;padding-left: 40px;">
          <h2>Inspiration for future getaways</h2>
        </div>
        <div id="info2">
          <div>
            <P>Popular</P>
          </div>
          <div>
            <p>Art & Culture</p>
          </div>
          <div>
            <p>Outdoors</p>
          </div>
          <div>
            <p>Mountains</p>
          </div>
          <div>
            <p>Beach</p>
          </div>
          <div>
            <p>Unique Stays</p>
          </div>
          <div>
            <p>Categories</p>
          </div>
          <div>
            <p>Things to do</p>
          </div>
        </div>
        <hr style="border: none; height:2px; background-color: rgb(162, 161, 161);margin-left: 42px; width: 90%;">
        </hr>
        <div id="info3">
          <div style="width: 320px;">
            <p style="font-weight: 400;">Canmore</p>
            <p style="opacity: 0.4; font-size: 15px;">Pet-friendly rentals</p>
          </div>
          <div style="width: 320px;">
            <p style="font-weight: 400;">Marbella</p>
            <p style="opacity: 0.4; font-size: 15px;">Cottage rentals</p>
          </div>
          <div style="width: 320px;">
            <p style="font-weight: 400;">Scottsdale</p>
            <p style="opacity: 0.4; font-size: 15px;">Pet-friendly rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Mountain View</p>
            <p style="opacity: 0.4; font-size: 15px;">Family-friendly rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Ibiza</p>
            <p style="opacity: 0.4; font-size: 15px;">Holiday rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Dubai</p>
            <p style="opacity: 0.4; font-size: 15px;">Family-friendly rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Orlando</p>
            <p style="opacity: 0.4; font-size: 15px;">Manshion rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Capri</p>
            <p style="opacity: 0.4; font-size: 15px;">House rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Jersey</p>
            <p style="opacity: 0.4; font-size: 15px;">Flat rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Manchester</p>
            <p style="opacity: 0.4; font-size: 15px;">House rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Tenby</p>
            <p style="opacity: 0.4; font-size: 15px;">Flat rentals</p>
          </div>
          <div style="width: 320px; padding-top: 15px;">
            <p style="font-weight: 400;">Newport</p>
            <p style="opacity: 0.4; font-size: 15px;">Apartment rentals</p>
          </div>
        </div>
      </div>
      <hr style="border: none; height:2px; background-color: rgb(162, 161, 161); margin-top: 40px;">
      </hr>
      <div id="info4">
        <div id="info41">
          <a href="" style="text-decoration: none; color: black;">Support</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Help Center</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">AirCover</a>
          <a href=""
            style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Anti-Discrimination</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Disability
            Support</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Cancellation
            options</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Report neighbourhood
            concern</a>
        </div>
        <div id="info42">
          <a href="" style="text-decoration: none; color: black;">Hosting</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Airbnb your home</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">AirCover for
            Hosts</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Hosting resources</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Community forum</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Hosting
            responsibly</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Join a free hosting
            class</a>
        </div>
        <div id="info43">
          <a href="" style="text-decoration: none; color: black;">Airbnb</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Newsroom</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">New features</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Careers</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Investors</a>
          <a href="" style="text-decoration: none; color: black; opacity: 0.7; padding-top: 13px;">Airbnb.org emergency
            stays</a>
        </div>
      </div>
      <hr style="border: none; height:2px; background-color: rgb(162, 161, 161); margin-top: 40px;">
      </hr>
      <div id="infomain">
        <div id="mi" style="margin-top: 20px;"> <a href="#main1"
            style="text-decoration: none; color: black; padding-left: 47%;">Back to top</a></div>
        <div id="mi1" style="padding-top: 30px; padding-left: 38%;">
          <a href="" style="color: black; text-decoration: none;"><i class="fa-solid fa-globe"></i> English(IN)</a>
          <a href="" style="color: black; text-decoration: none; padding-left: 10px;">₹ INR</a>
          <a href="https://www.instagram.com/airbnb/" target="_blank"
            style="color: black; text-decoration: none; padding-left: 30px;"><i class="fa-brands fa-square-instagram"
              style="font-size: 20px;"></i></a>
          <a href="https://x.com/airbnb_in" target="_blank"
            style="color: black; text-decoration: none;padding-left: 20px;"><i class="fa-brands fa-twitter"
              style="font-size: 20px;"></i></a>
          <a href="https://www.facebook.com/AirbnbIndia" target="_blank"
            style="color: black; text-decoration: none; padding-left: 20px;"><i class="fa-brands fa-square-facebook"
              style="font-size: 20px;"></i></a>
        </div>
        <div style="margin-top: 20px; padding-left: 45% ;">© 2024 Airbnb, Inc.</div>
        <div id="mi2" style="padding-left: 36%; padding-top: 8px;">
          <a href="" style="color: black; text-decoration: none;">Privacy</a>
          <a href="" style="color: black; text-decoration: none; padding-left: 15px;"> Terms</a>
          <a href="" style="color: black; text-decoration: none; padding-left: 15px;"> Sitemap</a>
          <a href="" style="color: black; text-decoration: none; padding-left: 15px;"> Company Details</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>