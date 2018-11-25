<?php
/**
 * A different view style of the Main Page for confirmation with the client
 * Created by Effie.
 * Date: 2018/11/23
 */
?>

<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODER</title>
    <link rel="stylesheet" href="index2/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="index2/css/mobile.css">
    <script src="index2/js/mobile.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {
            display: none;
        }
    </style>
</head>
<body>
<div id="page">
    <div id="header">
        <div>
            <a href="index.html" class="logo"><img src="index2/images/coder_logo.png" alt="" height="100"
                                                   width="120"></a>
            <ul id="navigation" style="margin-top: 40px;border-top:1px solid grey;border-bottom: 1px solid grey ">
                <li class="menu">
                    <a href="index.php">Home</a>
                    <ul class="secondary">
                        <li>
                            <a href="AboutCoder.php">About Coder</a>
                        </li>
                        <li>
                            <a href="OurTeam.php">Our Team</a>
                        </li>
                        <li>
                            <a href="ContactUs.php">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#">Students & Mentors</a>
                    <ul class="secondary">
                        <li>
                            <a href="Students.php">Students</a>
                        </li>
                        <li>
                            <a href="Mentors.php">Mentors</a>
                        </li>
                        <li>
                            <a href="applyform.php.php">Apply Now</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#">Partners</a>
                    <ul class="secondary">
                        <li>
                            <a href="Partners.php?type=External">External Partners</a>
                        </li>
                        <li>
                            <a href="Partners.php?type=Internal">Internal Partners</a>
                        </li>
                        <li>
                            <a href="#">Apply to be a partner</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#">Projects</a>
                    <ul class="secondary">
                        <li>
                            <a href="project_list.php?type=New">New Projects</a>
                        </li>
                        <li>
                            <a href="project_list.php?type=Current">Current Projects</a>
                        </li>
                        <li>
                            <a href="project_list.php?type=Past">Past Projects</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#">Success Story</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body" class="home">
        <div class="header">
            <!-- 模板原有div 暂时保留 之后确定不要的话 连同样式一起删掉 -->
        </div>
        <div class="w3-content w3-display-container"> <!-- https://www.w3schools.com/w3css/w3css_slideshow.asp -->
            <div class="mySlides"
                 style="height: 500px;background:url(images/pic01.jpg) no-repeat left top; background-size: cover">
                <div style="text-align: center; margin-top: 15%">
                    <header>
                        <p>YOUR CAREER START HERE</p>
                        <h2>CODER</h2>
                    </header>
                    <p>
                        <a href="applyform.php" style="background-color: ghostwhite;width:100px;height:50px;">APPLY
                            NOW</a>
                    </p>
                    <p>
                        <button>AVAILABLE PROJECTS</button>
                    </p>
                </div>
            </div>
            <div class="mySlides"
                 style="height: 500px;background:url(images/pic02.jpg) no-repeat left top; background-size: cover">
                <div style="text-align:center; line-height:40px;height:500px; width:200px;margin-right: 10%; background-color: lightgrey; opacity: 0.4">
                    <header>
                        <h2>Apply Now</h2>
                        <p>Describe what you offer here. <br>add a few choice words and a stunning pic to tantalize your
                            audience and leave them hungry for more.</p>
                    </header>
                </div>
            </div>
            <div class="mySlides"
                 style="height: 500px;background:url(images/pic03.jpg) no-repeat left top; background-size: cover">
                <div style="text-align:center;margin-top: 10%; background-color: lightgrey; opacity: 0.4">
                    <header>
                        <h2>Join</h2>
                        <p>
                            <a href="#">To be a partner</a>
                        </p>
                        <p>Describe what you offer here</p>
                    </header>
                </div>
            </div>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>
        </div>

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

            .navcol3 img {
                width: 100px;
                height: 100px;
            }

            .navcol3 button {
                background-color: transparent;
                box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
                color: #555 !important;
            }
        </style>

        <!-- SECTION: PROJECTS -->
        <div class="navcol3">
            <header>
                <h2>PROJECTS</h2>
            </header>
            <ul>
                <li>
                    <div>
                        <img src="images/pic02.jpg" alt=""/>
                    </div>
                    <div>
                        <header>
                            <h2>Project1</h2>
                        </header>
                        <p> project description ... </p>
                        <footer>
                            <a href="#" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/pic02.jpg" alt=""/>
                    </div>
                    <div>
                        <header>
                            <h2>Project2</h2>
                        </header>
                        <p> project description ... </p>
                        <footer>
                            <a href="#" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/pic02.jpg" alt=""/>
                    </div>
                    <div>
                        <header>
                            <h2>Project3</h2>
                        </header>
                        <p> project description ... </p>
                        <footer>
                            <a href="#" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </li>
            </ul>
        </div>

        <!-- SECTION: SUCCESSFUL STORIES -->
        <div class="navcol3">
            <header>
                <h2>SUCCESSFUL STORIES</h2>
            </header>
            <ul>
                <li>
                    <div>
                        <img src="images/pic03.jpg" alt=""/>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/pic03.jpg" alt=""/>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/pic03.jpg" alt=""/>
                    </div>
                </li>
            </ul>
        </div>


    </div>
    <div id="footer" style="background-color: darkgrey;">
        <div style="float: left;margin-left: 20%">
            <div>
                <a target="_blank" href="http://www.utas.edu.au/courses/study/computing-and-it"><img
                            src="images/utas-logo-noline.png"></a>
            </div>
            <div class="connect">
                <a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
                <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
                <a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
                <a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
                <p>Copyright © 2019-2029 UTAS ICT faculty All Rights Reserved. Powered by UTAS ICT faculty</p>
            </div>
        </div>
        <div align="center" >
            <h2>CONTACTS</h2>
            <span><br>University of Tasmania <br>
		Discipline of ICT<br>
		Grosvenor St, Sandy Bay TAS 7005<br>
		info@mysite.com  |  Tel: 123-456-7890</span>
        </div>
    </div>


</div>



</body>
</html>

