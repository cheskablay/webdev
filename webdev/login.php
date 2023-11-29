<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio by Cheska Mae Blay</title>
    <link rel="stylesheet" href="index.css" href='https://fonts.googleapis.com/css?family=Oswald'>
    <script src="index.js" defer></script>
</head>

<body>
    <div class="">
        <nav id="nav">
            <p class="logo">Account</p>
        </nav>
    </div>
    <div class="accounts">
        <div class="container">
            <div class="login-form">
                <div class="header">
                    <label class="title">Login</label>
                    <p class="description">Login to your account and enjoy our best online courses for free.</p>
                </div>
                <form method="post" action="login.php">
                    <div class="input_container">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <!-- Your SVG path here -->
                        </svg>
                        <input id="email_field" class="input_field" type="email" name="email" placeholder="Email"
                            required>
                    </div>
                    <div class="input_container">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <!-- Your SVG path here -->
                        </svg>
                        <input id="password_field" class="input_field" type="password" name="password"
                            placeholder="Password" required>
                    </div>
                    <a href="portfolio.html"> <button class="sign-in_btn" type="submit" title="Sign In">
                        <span>Sign In</span>
                    </button></a>
                </form>
            </div>
            <div class="testimonial">
                <p>"Hi there, thanks for looking into my code! Let's get you settled."</p>
                <div class="user-profile-picture"></div>
                <div class="user">
                    <span class="username">Francheska Mae D. Blay</span>
                    <span class="occupation">Creative Designer &amp; Developer</span>
                </div>
            </div>
        </div>
    </div>

    <?php
// Constant email and password for demonstration purposes
$constantEmail = "demo@example.com";
$constantPassword = password_hash("demo123", PASSWORD_DEFAULT);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (you may add more validation)
    if (empty($email) || empty($password)) {
        echo "Please fill in both email and password.";
    } else {
        // Check if the entered credentials match the constant values
        if ($email === $constantEmail && password_verify($password, $constantPassword)) {
            // Login successful
            echo "Login successful!";
            
            // Redirect to portfolio.html
            header("Location: portfolio.html");
            exit(); // Make sure to exit after the redirection to prevent further execution
        } else {
            // Invalid credentials
            echo "Invalid email or password.";
        }
    }
}
?>


</body>

</html>