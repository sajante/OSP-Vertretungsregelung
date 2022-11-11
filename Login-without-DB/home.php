<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (! isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="landingpage.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
<nav class="navtop">
    <div>
        <h1>Übersicht</h1>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>
<div class="content">
    <h2>Home Page</h2>
    <p>Welcome back, <?= $_SESSION['name'] ?>!</p>

    <br>
    <button onclick="window.location.href='logout.php';"> type="btn-logout" style="float:right;margin-right: 5%;"><i class="fa fa-sign-out" aria-hidden="true"></i>
        logout
    </button>
    </br>


    <div>
        <img width="240" src="https://www.gso-koeln.de/wp-content/uploads/2020/06/LOGO-GSO_neu.png" alt="Bild"
             style="float: left;margin-right: 5px;">
    </div>

    <h1>Überblick Vertretungsanträge</h1>

    <div class="button-group">
        <button type="btn-agree" id="sub1" disabled="disabled"><i class="fa fa-check"></i> Antrag genehmigen</button>
        <button type="btn-disagree"><i class="fa fa-close"></i> Antrag ablehnen</button>
        <button onclick="self.location.href= 'http://0.0.0.0:8080/Antragsformular/antrag.php'" type="btn-add"><i
                    class="fa fa-plus"></i> neuer Antrag
        </button>
        <input type="text" id="search" placeholder="Suche..."
               style="box-shadow: 2px 2px #5b9bd5;background-color: #eee;border-radius: 6px; margin-left: 15px;">
    </div>

    <table id="mytable">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Datum</th>
            <th>Grund</th>
            <th>Status</th>
            <th>Link zum PDF-Formular</th>
            <th>Kommentar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" id="selectDisAgree" name="select"></td>
            <td data-column="ID">1</td>
            <td data-column="Datum">07.11.2022</td>
            <td data-column="Grund">Dienstveranstaltung</td>
            <td data-column="Status">in Arbeit</td>
            <td data-column="Link"><a href="https://www.gso-koeln.de/wp-content/uploads/2020/06/LOGO-GSO_neu.png">Formular</a>
            </td>
            <td><textarea name="comment" placeholder="Ablehnungsgrund" id="comment"></textarea></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectDisAgree" name="select"></td>
            <td data-column="ID">2</td>
            <td data-column="Datum">08.11.2022</td>
            <td data-column="Grund">Prüfungsausschuss</td>
            <td data-column="Status">genehmigt</td>
            <td data-column="Link"><a href="https://www.gso-koeln.de/wp-content/uploads/2020/06/LOGO-GSO_neu.png">Formular</a>
            </td>
            <td><textarea name="comment" placeholder="Ablehnungsgrund" id="comment"></textarea></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectDisAgree" name="select"></td>
            <td data-column="ID">2</td>
            <td data-column="Datum">01.11.2022</td>
            <td data-column="Grund">Fortbildung</td>
            <td data-column="Status">abgelehnt</td>
            <td data-column="Link"><a href="https://www.gso-koeln.de/wp-content/uploads/2020/06/LOGO-GSO_neu.png">Formular</a>
            </td>

            <td><textarea name="comment" placeholder="Ablehnungsgrund" id="comment" required></textarea></td>
        </tr>

        </tbody>
    </table>


    <script type="text/javascript" src="landingpage.js"></script>
</div>

</body>
</html>

