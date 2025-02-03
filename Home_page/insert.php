<?php 
require_once "conn.php";

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $roomType = $_POST['roomType'];
    $specialRequests = $_POST['specialRequests'];

    if ($firstName != "" && $lastName != "" && $email != "" && $phone != "" && $age != "" && 
        $checkIn != "" && $checkOut != "" && $roomType != "") {
        
        $sql = "INSERT INTO bookings (firstname, lastname, email, phone, age, checkin, checkout, roomtype, requests) 
                VALUES ('$firstName', '$lastName', '$email', '$phone', '$age', '$checkIn', '$checkOut', '$roomType', '$specialRequests')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Booking successful!'); window.location.href = 'booked.php?id=" . $conn->insert_id . "';</script>";
        } else {
            echo mysqli_error($conn);
        }
    } else {
        echo "<script>alert('All fields are required!'); window.location.href = '/Airbnb_website/Home_page/booking.php';</script>";
    }
}
?>
