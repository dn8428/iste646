<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/mastermind-main-page.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/mastermind-navbar.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/mastermind-footer.css"/>


    <title>MasterMinds</title>
</head>
<body>
<!--Header -->
<div class="main-container">
    <!--  Navbar  -->
    <?php

    $_SESSION['rootPath'] = "../../";
    include($_SESSION['rootPath'] . "assets/inc/navbar.php");

    ?>


    <!--  Placeholder for main contents  -->
    <div class="main-content">
        <div class="title">
            <div class="ttlContainer">
                <h1 class="mainTitle">Related Links</h1>
                <div class="subTitle">For the best online recommendations, visit our friends and start discovering
                    today.
                </div>
            </div>
            <div class="imgContainer">
                <img class="mainImage" src="../../assets/img/link-main.png" alt="link-main"/>
            </div>
        </div>


    </div>

    <div class="link-container">
        <div class="card-container">
            <div class="link-card">

            </div>
        </div>
    </div>

</div>


<footer class="footer">
    <div>
        <a>Thank you !</a>
    </div>
</footer>

</body>
</html>