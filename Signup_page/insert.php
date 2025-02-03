<?php
require_once "conn.php";
    if (isset($_POST['submit'])) {
        $fullName = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($fullName != "" && $email != "" && $password != "") {
            $sql = "INSERT INTO users (full_name, email, password) VALUES ('$fullName', '$email', '$password')";
            
            $stmt = mysqli_prepare($conn, $sql);
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Signup successful!');window.location.href ='/Airbnb_website/Login_page/Login.php';</script>";
            } else {
                echo mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Full Name, Email, and Password cannot be empty!');window.location.href ='/Airbnb_website/Signup_page/Signup.php';</script>";
        }
    }
?>