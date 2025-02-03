<?php
require_once 'conn.php';

if (isset($_POST['email'])) {
    $name = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<span style='color: white;'>Username already exists.</span>";
    } else {
        echo "<span style='color: yellow;'>Username is available.</span>";
    }

    mysqli_close($conn);
}
?>