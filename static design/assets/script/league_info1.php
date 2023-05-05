<!DOCTYPE html>
<html lang="en">
<head>
    <title>League Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $_SESSION['rootPath']; ?>assets/css/league_info.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['rootPath']; ?>assets/css/style.css"/>

</head>
<body>
<div class="page">
    <nav class="years">
        <a href="#0" class="menu__link">2022-23</a></li>
        <a href="#0" class="menu__link">2021-22</a></li>
        <a href="#0" class="menu__link">2020-21</a></li>
        <a href="#0" class="menu__link">2021-20</a></li>
        <a href="#0" class="menu__link">2020-19</a></li>
        <a href="#0" class="menu__link">2019-18</a></li>
        <a href="#0" class="menu__link">2018-17</a></li>
        <a href="#0" class="menu__link">2016-17</a></li>
        <a href="#0" class="menu__link">2015-16</a></li>
        <a href="#0" class="menu__link">more</a></li>
        </ul>
    </nav>
    <div class="leagues">
        <ul>
            <li><a href="#0" class="league_list">Albany Leagues</a></li>
            <li><a href="#0" class="league_list">Buffalo Leagues</a></li>
            <li><a href="#0" class="league_list">Rochester Leagues</a></li>
            <li><a href="#0" class="league_list">Syracuse Leagues</a></li>
        </ul>
    </div>
    <div id="allleagues">
        <div onclick="window.location.href='league_info.html'" class="eachleague clickable-div">
            <h2>League 1</h2>
            <p>Broadalbin-Perth</p>
            <p>Galway</p>
            <p>Gloversville</p>
            <p>Johnstown</p>
            <p>Mayfield</p>
        </div>
        <div class="eachleague">
            <h2>League 2</h2>
            <p>Christian Brothers</p>
            <p>Duanesburg</p>
            <p>LaSalle</p>
            <p>Niskayuna</p>
            <p>Schuylerville</p>
            <p>Watervliet</p>
        </div>
        <div class="eachleague">
            <h2>League 3</h2>
            <p>Averill Park</p>
            <p>Columbia</p>
            <p>Emma Willard</p>
            <p>Lansingburgh</p>
            <p>Mohonasen</p>
            <p>Rensselaer</p>
            <p>Schalmont</p>
        </div>
        <div class="eachleague">
            <h2>League 4</h2>
            <p>Bethlehem</p>
            <p>Burnt Hills-Ballston Lake</p>
            <p>Colonie</p>
            <p>Guilderland</p>
            <p>Saratoga Springs</p>
            <p>Schenectady</p>
        </div>
        <div class="eachleague">
            <h2>League 5</h2>
            <p>Berlin</p>
            <p>Berne-Knox-Westerlo</p>
            <p>Catholic Central</p>
            <p>Holy Names</p>
            <p>Hoosac School</p>
            <p>Tamarac</p>
            <p>Troy</p>
        </div>
    </div>
</div>
</body>
</html>
