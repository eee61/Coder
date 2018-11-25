<link rel="stylesheet" href="assets/css/index.css?v={<?php echo time()?>}"> 
<?php
/**
 * Partners Page
 * Created by Weibo Chen
 * Date: 2018/11/24
 */

//load header of the page
include_once 'header.html';
$title = $_GET['type'];
?>

<!-- One -->
<section id="One" class="wrapper-style3">
    <div class="inner">
        <header class="align-center">
            <h2><?php echo $title ?> Partners</h2>
        </header>
    </div>
</section>

<!-- Two -->
<!-- 可以参考Project List Page 读取的方式， 下面是使用php画html的模板供参考 -->
<section id="one" class="wrapper-style2">
    <div class="inner">
        <header>
            <h2>Partners</h2>
        </header>
    </div>
    <div class="inner">
        <div class="grid-style">
            <?php echo 'building...'; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php
include_once 'footer.html';
?>
