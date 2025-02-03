document.getElementById('loginBtn').addEventListener('click', function(event) {
    event.preventDefault(); 
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Simple validation (optional but recommended)
    if (!email || !password) {
        alert("Please enter both email and password.");
        return;
    }

    // Create the request payload
    const loginData = new FormData();
    loginData.append('email', email);
    loginData.append('password', password);

    // Send the login data to the PHP backend using fetch
    fetch('login.php', { // Replace with the actual PHP file path
        method: 'POST',
        body: loginData
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the backend
        if (data.success) {
            alert('Login successful!');
            window.location.href = '/dashboard.php'; // Redirect to a dashboard or another page
        } else {
            alert('Invalid email or password. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error during login:', error);
        alert('There was an issue with the login process. Please try again later.');
    });
});