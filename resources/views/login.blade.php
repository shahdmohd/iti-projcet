<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/signuplogin.css')}}">
    <script src="{{asset('./js/script.js')}}"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="col1">
            <img src="{{asset('./Media/images/Logo-removebg-preview.png')}}" alt="">
        </div>
        <div class="col2">
            <div class="header">
                <p>Don't have account ? <button onclick="goToRegister()">Register</button></p>
            </div>
            <div class="form-section">
                <h1>Welcome to BlogakTube!</h1><br>
                <p>Login to Blogak</p><br><br><br>
                <form action="{{asset('/Frontend/html/home.html')}}">
                    <label id="login-email-label" for="email">Email:</label><br>
                    <input id="login-email-input" type="email" id="email" name="email" required
                        placeholder="Enter your Email"><br><br><br><br>
                    <label id="login-pass-label" for="password">Password:</label><br>
                    <input id="login-password-input" type="password" id="password" name="password" required
                        placeholder="Enter your Password"><br><br>
                    <input type="submit" value="Login" id="submitlogin">
                </form>
            </div>
        </div>
    </div>
</body>


</html>