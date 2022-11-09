<!DOCTYPE html>
<html lang="de">
<head>
    <title>Antragsformular Vertretungsregelung</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<h1 class="überschrift">Vertretungsregelung
    <img src="https://www.gso-koeln.de/wp-content/uploads/2020/06/cropped-LOGO-GSO_neu.png" class="gsoLogo" alt="">
</h1>
<h2>Name: <input type="text" name="teacherName" value="" class="nameField"></h2>
<h2>Grund der Abwesenheit:</h2>
<input type="checkbox" id="reasonOne" name="dienstveranstaltung" value="dienstveranstaltung">
<label for="reasonOne">Dienstveranstaltung</label>
<input type="checkbox" id="reasonTwo" name="prüfungsausschuss" value="prüfungsausschuss">
<label for="reasonOne">Prüfungsausschuss</label>
<input type="checkbox" id="reasonThree" name="fortbildung" value="fortbildung">
<label for="reasonOne">Fortbildung</label>
<input type="checkbox" id="reasonFour" name="unterrichtsgang" value="unterrichtsgang">
<label for="reasonOne">Unterrichtsgang</label><br>
<input type="checkbox" id="reasonFive" name="sonstiges" value="sonstiges">
<label for="reasonOne">Sonstiges:</label>
<input type="text" name="otherReason" value="" class="otherReasonField">
<h2>Vertretungsvorschlag</h2>
<form action="/action_page.php">
    <input type="date" id="datepicker" name="datepicker">
</form><br>
<div>
    <table>
        <tr>
            <th>UStd.</th>
            <th>Fach</th>
            <th>Klasse</th>
            <th>Vorschläge für Vertretung</th>
        </tr>
        <tr>
            <td>7:45 - 8:30</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>8:30 - 9:15</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>9:35 - 10:20</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>10:20 - 11:05</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>11:25 - 12:10</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>12:10 - 12:55</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>13:15 - 14:00</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>14:00 - 14:45</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>15:05 - 15:50</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>15:50 - 16:35</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>16:55 - 17:40</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>17:40 - 18:25</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>18:25 - 19:10</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>19:30 - 20:15</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
        <tr>
            <td>20:15 - 21:00</td>
            <td><input type="text" name="courseName" value="" style="width: 75px;"></td>
            <td><input type="text" name="className" value="" style="width: 75px;"></td>
            <td><input type="text" name="proposals" value=""></td>
        </tr>
    </table>
</div>
<br>
<div>
    <table>
        <tr>
            <th>Betroffene Bereiche</th>
            <th>AV</th>
            <th>ET</th>
            <th>IT</th>
            <th>BFS</th>
            <th>ITA</th>
            <th>FOS</th>
            <th>FS</th>
        </tr>
        <tr>
            <td>Bereichsleiter</td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
            <td><input type="text" name="paraph" value="" style="width: 25px;"></td>
        </tr>
    </table>
</div>
<h4>Bitte rechtzeitig im Sekretariat abgeben - möglichst 1 Woche vor dem Vertretungsfall!</h4>
<button onclick="createPDF();sendForm();" class="btnSubmit">Senden</button>
<button onclick="self.location.href= 'http://0.0.0.0:8080/%C3%9Cbersichtsseite/landingpage.php'" class="btnCancel">Abbrechen</button>
</body>
</html>