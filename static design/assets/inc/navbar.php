<!--  Navbar  -->
<div class="nav_container">
    <div class="navbar">
        <div class="logo_container">
            <a href="<?php echo $_SESSION['rootPath'] ?>"><img
                    src="<?php echo $_SESSION['rootPath'] ?>assets/img/mastermind_logo_3.png"
                    alt="logo"></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>">Home</a>
                </li>
                <li class="dropdown">
                    <div class="dropWrap">
                        <a href="<?php echo $_SESSION['rootPath'] ?>l">Program Information</a>
                        <ul>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">All-stars</a></li>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Events</a></li>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Alumni Events</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>assets/pages/general-info/index.html">General Information</a>
                </li>
                <li class="dropdown">
                    <div class="dropWrap">
                        <a href="<?php echo $_SESSION['rootPath'] ?>">Leagues Information</a>
                        <ul>
                            <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Results</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>">Teams</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>">Contact</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/relatedlink.php">Related Links</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['rootPath'] ?>">Store</a>
                </li>
            </ul>
        </nav>
    </div>
</div>