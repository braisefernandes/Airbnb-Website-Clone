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

    alert("Signup successful! (For demo purposes, data is not saved)");
    return true;
  }
