<?php 
require_once "conn.php";

if (isset($_POST['submit'])) {
    $id = $_REQUEST['id']; 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $roomType = $_POST['roomType'];
    $specialRequests = $_POST['specialRequests'];
        
        $sql = "UPDATE bookings SET 
                    firstname = '$firstName', 
                    lastname = '$lastName', 
                    email = '$email', 
                    phone = '$phone', 
                    age = $age, 
                    checkin = '$checkIn', 
                    checkout = '$checkOut', 
                    roomtype = '$roomType', 
                    requests = '$specialRequests' 
                WHERE id = $id";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Booking updated successfully!'); window.location.href = '/Airbnb_website/Home_page/Home_page.php';</script>";
        } else {
            echo mysqli_error($conn);
        }
}
?>