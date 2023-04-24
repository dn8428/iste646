<?php
$_SESSION['rootPath'] = '../../';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['rootPath']; ?>assets/css/style.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo $_SESSION['rootPath']; ?>assets/css/mastermind-main-page.css"/>
    <!--    <link rel="stylesheet" type="text/css" href="-->
    <?php //echo $_SESSION['rootPath']; ?><!--assets/css/mastermind-footer.css"/>-->
    <script src="<?php echo $_SESSION['rootPath']; ?>assets/js/main.js"></script>


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


    <div class="link-wrap">
        <!--  Placeholder for main contents  -->
        <div class="link-main-content">
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

</div>


<?php
include($_SESSION['rootPath'] . "assets/inc/footer.php");
?>


</body>
</html>