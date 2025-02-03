<?php
require_once "conn.php";
$id=$_REQUEST['id'];
$query = "DELETE FROM bookings WHERE id=$id";
if (mysqli_query($conn, $query)){
echo "<script>alert('Booking Deleted successfully');window.location.href='/Airbnb_website/Home_page/booking.php';</script>";
}else{
echo mysqli_error($conn);
}
?>