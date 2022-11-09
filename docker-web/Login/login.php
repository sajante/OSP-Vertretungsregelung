<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="icon" href="https://www.gso-koeln.de/wp-content/uploads/2020/06/cropped-LOGO-GSO_neu.png">
</head>
<body>
<form id="LoginForm" onsubmit="return false">
    <div class="center-form">
        <div id="login-form">
            <div class="image">
                <img src="https://www.gso-koeln.de/wp-content/uploads/2020/06/cropped-LOGO-GSO_neu.png" alt="">
            </div>
            <div class="bg-light">
                <h1 class="display-5">Willkommen beim Vertretungsplaner</h1>
                <br>
                <p class="col-md-8 fs-4 lead">Hier können Sie digital das Vertretungsformular ausfüllen</p>
            </div>
            <!-- <h2 class="mb-4">Vertretungsplanregelung</h2> -->
            <label for="Username"></label>
            <input type="text" id="username" name="Username" class="mb-1" placeholder="Benutzername">
            <label for="Password"></label>
            <input class="mb-2" type="password" id="password" placeholder="Passwort" required />
            <input type="submit" value="Anmelden" onclick="msg()" class="mb-1 sig-in-btn">
        </div>
</form>
</body>
</html>
<script src="script.js"></script>