<?php
$_SESSION['rootPath'] = '../../';

?>

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

<div class="main-container">
    <!--  Navbar  -->
    <?php

    include($_SESSION['rootPath'] . "assets/inc/navbar.php");

    ?>
</div>


<div class="page">
    <nav class="years">
        <a href="#" class="menu__link">2022-23</a></li>
        <a href="#" class="menu__link">2021-22</a></li>
        <a href="#" class="menu__link">2020-21</a></li>
        <a href="#" class="menu__link">2021-20</a></li>
        <a href="#" class="menu__link">2020-19</a></li>
        <a href="#" class="menu__link">2019-18</a></li>
        <a href="#" class="menu__link">2018-17</a></li>
        <a href="#" class="menu__link">2016-17</a></li>
        <a href="#" class="menu__link">2015-16</a></li>
        <a href="#" class="menu__link">more</a></li>
        </ul>
    </nav>
    <div class="leagues">
        <ul>
            <li>
                <a href="<?php echo $_SESSION['rootPath']; ?>assets/script/league_info1.php"
                   class="league_list">Albany Leagues</a></li>
            <li><a href="#" class="league_list">Buffalo Leagues</a></li>
            <li><a href="#" class="league_list">Rochester Leagues</a></li>
            <li><a href="#" class="league_list">Syracuse Leagues</a></li>
        </ul>
    </div>
    <div id="grid-container-content">
        <div id="header">
            <h1>Albany Area-League 1</h1>
        </div>
        <div id="standing">
            <h2>Latest standing</h2>
            <hr align="left">
            <table>
                <tr>
                    <th>League1</th>
                    <th>W</th>
                    <th>L</th>
                    <th>Points</th>
                </tr>
                <tr>
                    <td>Galway</td>
                    <td>11</td>
                    <td>1</td>
                    <td>3245</td>
                </tr>
                <tr>
                    <td>Mayfield</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2125</td>
                </tr>
                <tr>
                    <td>Broadalbin-Perth</td>
                    <td>6</td>
                    <td>6</td>
                    <td>1675</td>
                </tr>
                <tr>
                    <td>Gloversville</td>
                    <td>3</td>
                    <td>9</td>
                    <td>1175</td>
                </tr>
                <tr>
                    <td>Johnstown</td>
                    <td>2</td>
                    <td>10</td>
                    <td>1295</td>
                </tr>
            </table>
        </div>
        <div id="rotation">
            <h2>Rotations</h2>
            <hr align="left">
            <div class="rotation-list">
                <h3>Rotation1</h3>
                <p>@ Johnstown---Thurs---11/10---3:30
                    Galway 155, Mayfield 80
                    Johnstown 205, Gloversville 120
                    Galway 225, Gloversville 125
                    Johnstown 180, Mayfield 140
                </p>
            </div>
            <div class="rotation-list">
                <h3>Rotation2</h3>
                <p>@ Mayfield---Thurs---12/8---3:30
                    Broadalbin-Perth 305, Gloversville 60
                    Mayfield 235, Galway 160
                    Broadalbin-Perth 150, Johnstown 105
                    Galway 350, Johnstown 45
                    Mayfield 195, Gloversville 80
                </p>
            </div>
            <div class="rotation-list">
                <h3>Rotation3</h3>
                <p>@ Galway---Thurs---1/5---3:30
                    Mayfield 260, Johnstown 95
                    Galway 260, Gloversville 40
                    Mayfield 240, Broadalbin-Perth 110
                    Gloversville 195, Johnstown 70
                    Galway 205, Broadalbin-Perth 95
                </p>
            </div>
            <div class="rotation-list">
                <h3>Rotation4</h3>
                <p>@ Broadalbin-Perth---Thurs---2/2---3:30
                    Galway 380, Johnstown 0
                    Mayfield 295, Gloversville 80
                    Broadalbin-Perth 225, Johnstown 125
                    Galway 255, Mayfield 145
                    Broadalbin-Perth 205, Gloversville 30
                </p>
            </div>
            <div class="rotation-list">
                <h3>Rotation5</h3>
                <p>@ Gloversville---Thurs---3/16---3:30
                    Mayfield 150, Broadalbin-Perth 110
                    Gloversville 150, Johnstown 110
                    Galway 265, Broadalbin-Perth 10
                    Mayfield 205,. Johnstown 120
                    Galway 295, Gloversville 45
                </p>
            </div>
            <div class="rotation-list">
                <h3>Rotation6</h3>
                <p>@ Gloversville---Wed---4/5---3:30
                    Mayfield 125, Gloversville 95
                    Broadalbin-Perth 150, Johnstown 130
                    Broadalbin-Perth 195, Mayfield 55
                    Galway 305, Johnstown 110
                    Galway 390, Broadalbin-Perth 5
                    Gloversville 155, Broadalbin-Perth 115
                </p>
            </div>
        </div>
        <div id="scorer">
            <h2>Leading Scoreboard</h2>
            <hr align="left">
            <a href="">Download PDF file of player statistics</a>
            <br><br>
            <table>
                <tr>
                    <th>Player</th>
                    <th>School</th>
                    <th>Points</th>
                    <th>Points per half</th>
                </tr>
                <tr>
                    <td>Aiden Morey</td>
                    <td>Galway</td>
                    <td>535</td>
                    <td>22.3</td>
                </tr>
                <tr>
                    <td>Jacob Hughes</td>
                    <td>Broadalbin-Perth</td>
                    <td>400</td>
                    <td>19.1</td>
                </tr>
                <tr>
                    <td>Sam Kline</td>
                    <td>Mayfield</td>
                    <td>400</td>
                    <td>17.4</td>
                </tr>
                <tr>
                    <td>Dylan Merk</td>
                    <td>Mayfield</td>
                    <td>335</td>
                    <td>14.0</td>
                </tr>
                <tr>
                    <td>Aidan Reekie-Mell</td>
                    <td>Galway</td>
                    <td>285</td>
                    <td>14.3</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
