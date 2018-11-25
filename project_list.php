<?php
/**
 * Projects Page Display
 * Created by Jing Effie Liu.
 * Date: 2018/11/18
 */

//load header of the page
include_once 'header.html';
$title = $_GET['type'];
?>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p><a href="applyform.php" class="alt" >Apply for a project coder</a></p>
            <h2><?php echo $title ?> PROJECTs</h2>
        </header>
    </div>
</section>

<!-- Two -->
<?php
include_once 'project_list_readfromdb.php';
?>

<!-- Footer -->
<?php
include_once 'footer.html';
?>


