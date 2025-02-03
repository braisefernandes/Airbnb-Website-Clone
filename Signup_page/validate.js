function validateForm() {
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (fullName == "" || email == "" || password == "" || confirmPassword == "") {
        alert("Please fill in all fields!");
        return false;
    }

    if (password != confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }
}

function checkUsername(){
    const username = document.getElementById("email").value;
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "username.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("message").innerHTML = xhr.responseText;
        }
    };

    xhr.send("email=" +username);
}

