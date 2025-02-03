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
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="Booked.css">
</head>
<body>
    <div class="confirmation-container">
        <div class="header">
            <h1>  Booking Successful!  </h1>
            <p>Thank you for choosing our service. Here are your booking details:</p>
        </div>

        <div class="booking-details">
            <div class="booking-info">
                <h2>Booking Information</h2>
                <p><strong>Name:</strong> <?php echo $row['firstname'] . ' ' . $row['lastname']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                <p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
                <p><strong>Age:</strong> <?php echo $row['age']; ?></p>
                <p><strong>Check-In:</strong> <?php echo $row['checkin']; ?></p>
                <p><strong>Check-Out:</strong> <?php echo $row['checkout']; ?></p>
                <p><strong>Room Type:</strong> <?php echo ucfirst($row['roomtype']); ?></p>
                <p><strong>Special Requests:</strong> <?php echo $row['requests']; ?></p>
            </div>
            <div class="room-image">
                <img src="https://www.architectureartdesigns.com/wp-content/uploads/2016/05/15-Beautiful-Modern-Living-Rooms-Your-Home-Desperately-Needs-Ideas-From-1.jpg" alt="Hotel Room">
            </div>
        </div>

        <div class="thank-you">
            <p>We look forward to hosting you soon! For any assistance, feel free to <a href="contact.php">contact us</a>.</p>
            <a href="Home_page.php" class="button">Return to Home</a>
        </div>
    </div>
</body>
</html>