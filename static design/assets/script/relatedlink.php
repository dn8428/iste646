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

            <?php

            $DUMMY_RELATED_LINKS = [[
                'title' => 'National Academic Quiz Tournament',
                'info' => 'The National Academic Quiz Tournament is a highly competitive and prestigious
                            intercollegiate competition that tests participants on a wide range of academic subjects and
                            knowledge.',
                'img' => 'related-link-1.png'
            ], [
                'title' => 'Capital Region BOCES',
                'info' => 'Capital Region BOCES offers diverse educational programs and services to support school districts in the Capital Region of New York State, including career and technical education, special education, and instructional support.',
                'img' => 'related-link-2.png'
            ], [
                'title' => 'Academic Challenge Bowl',
                'info' => 'The Academic Challenge Bowl is a competitive academic tournament that tests the knowledge and skills of high school students in a variety of subjects.',
                'img' => 'related-link-3.png'
            ], [
                'title' => 'Monroe 2-Orleans BOCES',
                'info' => 'Monroe 2-Orleans BOCES provides a range of educational services and programs to school districts in the Monroe 2 and Orleans regions of New York State.',
                'img' => 'related-link-4.png'
            ]];

            foreach ($DUMMY_RELATED_LINKS as $index => $relatedLink) {
                echo '<div class="link-card">
                <div class="link-img-container">
                    <img src="' . $_SESSION['rootPath'] . 'assets/img/' . $relatedLink['img'] . '"
                         alt="rl-img' . $index . '">
                </div>
                <div class="link-info-card">
                    <div class="link-info">
                        <h3>' . $relatedLink['title'] . '</h3>
                        <h5>' . $relatedLink['info'] . '</h5>
                    </div>
                </div>
            </div>';
            }


            ?>

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