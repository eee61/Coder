<link rel="stylesheet" href="assets/css/index.css?v={<?php echo time()?>}">
<?php
/**
 * SuccessStory Page
 * Created by
 * Date: 2018/11/24
 */

//load header of the page
include_once 'header.html';
$title = $_GET['type'];
?>


<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <h2><?php echo $title ?> Success Story</h2>
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="assets/css/default.css">
            <link href="assets/css/gridex.css" rel="stylesheet">
        </header>
    </div>
</section>

<!-- Two -->
<article class="htmleaf-container">
    <div class="container wrapper">
        <div class="clearfix"></div>

        <br />
        <ul class="thumbnails gridex">
            <li class="span3 clearfix">
                <a href="#" class="thumbnail"> <img alt="270x170" src="images/coder111fu.jpg" /> </a>
                <!-- gd-expander required -->
                <div class="gd-expander">
                    <!-- gd-inner optional -->
                    <div class="gd-inner">
                        <div class="row-fluid">
                            <div class="span6 text-center">
                                <img alt="270x170" class="img-polaroid" src="images/coder1231fu.jpg" />
                            </div>
                            <div class="span6">
                                <h2>Coder Website</h2>
                                <p>
                                    Coder website is the uni students as a team to develop a website to
                                </p>
                                <a href="http://iweb.cis.utas.edu.au/~coder/coder/index.php" class="btn btn-success">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        <div class="push"></div>
    </div>
    </ul>
    <!-- /container -->

</article>
<!-- Footer -->
<?php
include_once 'footer.html';
?>



