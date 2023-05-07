<!--  Navbar  -->
<div class="nav_container">
    <div class="navbar">
        <div class="logo_container">
            <a href="<?php echo $_SESSION['rootPath'] ?>"><img
                        src="<?php echo $_SESSION['rootPath'] ?>assets/img/mastermind_logo_3.png"
                        alt="logo"></a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>">Home</a>
                </li>
                <li class="dropdown">
                    <div class="dropWrap">
                        <a href="<?php echo $_SESSION['rootPath'] ?>">Program Info</a>
                        <ul>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">All-stars</a></li>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Events</a></li>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Alumni Events</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>assets/pages/general-info/index.php">General Info</a>
                </li>
                <li class="dropdown">
                    <div class="dropWrap">
                        <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/league_info.php">Leagues Info</a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/relatedlink.php">Related Links</a>
                </li>
            </ul>
        </nav>
        <div class="hamburger-nav">
            <div id="hamburger-wrap" class="hamburger-wrap" onclick="handleMenuClick()">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>

            <div id="burger-menu" class="menu">
                <ul>
                    <li>
                        <a href="<?php echo $_SESSION['rootPath'] ?>">Home</a>
                    </li>
                    <li class="dropdown">
                        <div class="dropWrap">
                            <a href="<?php echo $_SESSION['rootPath'] ?>">Program Info</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $_SESSION['rootPath'] ?>assets/pages/general-info/index.php">General
                            Info</a>
                    </li>
                    <li class="dropdown">
                        <div class="dropWrap">
                            <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/league_info.php">Leagues Info</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/relatedlink.php">Related Links</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>