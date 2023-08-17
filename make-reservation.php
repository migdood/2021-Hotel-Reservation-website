<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="make-reservation2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.html"><img src="images/hotel-logo.png"></a>
        <div class="nav-links">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="">RESERVATIONS</a></li>
            <li><a href="make-reservation.php">MAKE A RESERVATION</a></li>
            <li><a href="">UPDATE RESERVATIONS</a></li>
            <li><a href="">CONTACT</a></li>
          </ul>
        </div>
      </nav>
      <div class="center">
      <h1 class="welcome">Welcome to King's Hotel</h1>
      <div class="container">
        <form class="reservation" action="includes/reservation.inc.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" name="firstname" placeholder="Enter Your First Name." required>
            </div>
            <div class="input-box">
              <span class"details">Second Name</span>
              <input type="text" name="secondname" placeholder="Enter Your Second Name." required>
            </div>
            <div class="input-box">
              <span class="details">Email Address</span>
              <input type="text" name="email" placeholder="Enter Your Email Address." required>
            </div>
            <div class="input-box">
              <span class="details">Passport Number</span>
              <input type="text" name="passportnum" placeholder="Enter You Passport Number." required>
            </div>
            <div class="input-box">
              <span class="details">Country/Region</span>
              <input type="text" name="country" placeholder="Enter Your Country." required>
            </div>
            <div class="input-box">
              <span class="details">City</span>
              <input type="text" name="city" placeholder="Enter Your City." required>
            </div>
          <div class="room-details">
            <input type="radio" name="room" id="dot-1">
            <input type="radio" name="room" id="dot-2">
            <input type="radio" name="room" id="dot-3">
            <input type="radio" name="room" id="dot-4">
            <span class="room-title">Room Selection</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="room">Guest Room, 1 King</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="room">Guest Room, 2 Queen</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="room">Suit, 1 King Bed, Sofa Bed</span>
              </label>
              <label for="dot-4">
                <span class="dot four"></span>
                <span class="room">Tub with Spray Jets, Suit, 1 King Bed</span>
              </label>
            </div>
          </div>
        </div>
          <div class="button">
              <input type="submit" name="submit" value="Confirm">
          </div>
        </form>
      </div>
    </div>
    </section>
  </body>
</html>
