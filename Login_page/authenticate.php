<?php
require_once "conn.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $sql = "SELECT password, full_name FROM users WHERE email = ?"; 
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows(statement: $stmt) > 0) {
                mysqli_stmt_bind_result($stmt, $storedPassword, $fullName);
                mysqli_stmt_fetch($stmt);

                if ($password === $storedPassword) { 
                    session_start(); 

                    $_SESSION['user_name'] = $fullName; 

                    echo "<script>alert('Login successful!');window.location.href ='/Airbnb_website/Home_page/Home_page.php';</script>";
                } else {
                    echo "<script>alert('Incorrect password.');window.location.href ='Login.php';</script>";
                }
            } else {
                echo "<script>alert('Email not registered.');window.location.href ='Login.php';</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Database query error.');window.location.href ='Login.php';</script>";
        }
    } else {
        echo "<script>alert('Email and Password cannot be empty!');window.location.href ='Login.php';</script>";
    }
}
?>
