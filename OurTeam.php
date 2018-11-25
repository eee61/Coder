<link rel="stylesheet" href="assets/css/index.css?v={<?php echo time()?>}"> 
<?php
/**
 * Our Team Page Display
 * Created by Jing Effie Liu.
 * Date: 2018/11/19
 *
 */

//load header of the page
include_once 'header.html';
?>

<!-- One -->
<section id="One" class="wrapper-style3">
    <div class="inner">
        <header class="align-center">
            <h2>Our Team</h2>
        </header>
    </div>
</section>

<style>
    .navcol3 {
        text-align: center;
    }

    .navcol3 ul {
        display: inline-block;
    }

    .navcol3 li {
        float: left;
    }

    .navcol3 li + li {
        margin-left: 20px;
    }

    .navcol3 p {
        color: black;
    }

    .navcol3 img {
        width: 200px;
        height: 200px;
    }

    .navcol3 button {
        background-color: transparent;
        box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
        color: #555 !important;
    }
</style>

<!-- Two -->
<section id="two" class="wrapper-style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header>

                </header>
                <div class="navcol3">
                    <ul>
                        <li>
                            <div>
                                <img src="images/pic02.jpg" alt=""/>
                            </div>
                            <div>
                                <p>Prof. Byeong Ho Kang<br>position ... </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="images/pic02.jpg" alt=""/>
                            </div>
                            <div>
                                    <p>Dr. Saurabh Garg<br> position ... </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="images/pic02.jpg" alt=""/>
                            </div>
                            <div>
                                    <p>Julia Jung<br> position ... </p>

                            </div>
                        </li>
                    </ul>
                </div>


            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<?php
include_once 'footer.html';
?>
