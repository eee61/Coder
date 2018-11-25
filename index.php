<?php
/**
 * Main Page
 * 1. display main page (dynamically load project data from the database)
 * Created by Jing Effie Liu.
 * Date: 2018/11/15
 */

//load header of the page
include_once 'header.html';
?>
    <link rel="stylesheet" href="assets/css/index.css?v={<?php echo time() ?>}">

    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="images/banner12.jpg" alt=""/>
            <div class="inner">
                <header>
                    <p>YOUR CAREER START HERE</p>
                    <h2>CODER</h2>
                </header>
                <p>
                    <a href="applyform.php" class="button alt" style="background-color: ghostwhite">APPLY NOW</a>
                </p>
                <p>
                    <button>AVAILABLE PROJECTS</button>
                </p>
            </div>
        </article>
        <article>
            <img src="images/banner14.jpg" alt=""/>
            <div class="inner">
                <header>
                    <h2>Apply Now</h2>
                    <p>Describe what you offer here. <br>add a few choice words and a stunning pic to tantalize your
                        audience and leave them hungry for more.</p>
                </header>
            </div>
        </article>
        <article>
            <img src="images/banner15.jpg" alt=""/>
            <div class="inner">
                <header>
                    <p>to be a partner</p>
                    <h2>Join</h2>
                    <p>Describe what you offer here.</p>
                </header>
            </div>
        </article>
    </section>


    <!-- One -->
    <section id="one" class="wrapper-style1">
        <div class="inner">
            <header>
                <br><br>
                <h2 class="align-center">WHAT IS CODER?</h2><br>
                <p>CODER is a team of academics and students in the Discipline of ICT, School of Technology,
                    Environments and Design within the College of Sciences and Engineering at the University of
                    Tasmania.
                    We are seeking enthusiastic and keen volunteer students who want to gain work experience from
                    various projects by industry and University.
                    This voluntary work experience will give you valuable experience in working on real projects that do
                    not form part of your normal masters/
                    undergraduate coursework, exposure to software systems, code development and technologies that will
                    be an excellent addition to your
                    knowledge and skillset, as well as inclusion in research publications that arise from the
                    projects.</p>
            </header>
        </div>
    </section>

    <!--Two -->
    <section id="two" class="wrapper-style2">
        <div class="inner" align="center" style="text-align: center">
            <header class="align-center">
                <h2>PROJECTS</h2>
                <p></p>
            </header>

        <!-- <iframe  width="100%" height="400" name="frame1" src="project_list_readfromdb.php"></iframe> -->
        <?php
        $title='all';
        include_once 'project_list_readfromdb.php';
        ?>
        </div>
    </section>


    <!-- Three -->
    <section id="three" class="wrapper-style1">
        <div class="inner">
            <header class="align-center">
                <h2>SUCCESSFUL STORIES</h2>
                <p></p>
            </header>
            <div class="gallery">
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic01.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="xxx"><img src="images/pic02.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="xxx"><img src="images/pic03.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="xxx"><img src="images/pic04.jpg" alt=""/></a>
                    </div>
                </div>
            </div>
            <div align="right">
                <a>MORE STORIES >></a>
            </div>
        </div>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper-style1">
        <div class="inner">
            <header class="align-center">
                <h2>PARTNERS</h2>
                <p class="special"></p>
                <img src="images/partner4.png">
            </header>
        </div>
    </section>

    <!-- Four -->
    <section id="five" class="wrapper-style1">
        <div class="inner">
            <header class="align-center">
                <h2>CONTACTS</h2>
                <p class="special"></p>
                <span><br>University of Tasmania <br>
		Discipline of ICT<br>
		Grosvenor St, Sandy Bay TAS 7005<br>
		info@mysite.com  |  Tel: 123-456-7890</span>
            </header>
        </div>
    </section>
    <br><br><br><br>
<?php
include_once 'footer.html';
?>