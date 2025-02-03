<?php
require_once "conn.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM bookings WHERE id='".$id. "'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb Booking</title>
    <link rel="stylesheet" href="Booking.css">
</head>

<body>
    <header>
        <h1>Welcome to Siolim,India.</h1>
        <p>Your dream stay awaits.</p>
    </header>

    <div class="container">
        <section class="intro">
            <div class="intro-text">
                <h2>Experience Unmatched Comfort & Style</h2>
                <p>Discover a world of luxury, elegance, and refined hospitality. Whether you're here for business or
                    leisure, we make sure you experience the very best.</p>
            </div>
            <div class="intro-images">
                <img src="https://cache.marriott.com/marriottassets/marriott/LASJW/lasjw-suite-0084-hor-clsc.jpg?interpolation=progressive-bilinear&"
                    alt="Luxury Room">
                <img src="https://th.bing.com/th/id/OIP.hnC9m3mVPTuskjKr0UzLnQHaE8?rs=1&pid=ImgDetMain"
                    alt="Deluxe Suite">
                <img src="https://th.bing.com/th/id/OIP.t0fm9hyQk5boWj4eorbTWQHaFj?rs=1&pid=ImgDetMain"
                    alt="Hotel Pool">
            </div>
        </section>

        <section class="booking-section">
            <h2>Book Your Stay</h2>
            <p>Update your details below to secure an unforgettable stay with us!</p>
        </section>

        <form class="booking-form" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstname'];?>" >
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastname'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $row['phone'];?>">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="1" value="<?php echo $row['age'];?>">
            </div>
            <div class="form-group">
                <label for="checkIn">Check-In Date</label>
                <input type="date" id="checkIn" name="checkIn" value="<?php echo $row['checkin'];?>">
            </div>
            <div class="form-group">
                <label for="checkOut">Check-Out Date</label>
                <input type="date" id="checkOut" name="checkOut" value="<?php echo $row['checkout'];?>">
            </div>
            <div class="form-group">
                <label for="roomType">Room Type</label>
                <select id="roomType" name="roomType" value="<?php echo $row['roomtype'];?>">
                    <option value="standard">Standard</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="suite">Suite</option>
                    <option value="penthouse">Penthouse</option>
                </select>
            </div>
            <div class="form-group">
                <label for="specialRequests">Special Requests</label>
                <textarea id="specialRequests" name="specialRequests" rows="4"
                value="<?php echo $row['requests'];?>"></textarea>
            </div>
            <div class="form-group button-group">
                <button type="submit" class="update-btn" value="update" name="submit"><b>Update</b></button>
                <button type="button" class="delete-btn">Delete</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Airbnb, Inc. All rights reserved.</p>
    </footer>
</body>
</html>