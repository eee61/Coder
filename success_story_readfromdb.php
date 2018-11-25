<?php
/**
 * Generate Success Story dynamically
 * Created by Webber
 * Date: 2018/11/22
 */

//connect the database
include_once 'dba.php';
mysqli_set_charset($conn, 'utf8');

// check the connection with the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
//read and display projects
$sql = "SELECT ID, Name, Pictures,Links,Picturel FROM SuccessStory";
$result = mysqli_query($conn, $sql);
$successStory = '';
while ($row = mysqli_fetch_array($result)) {
    $successStory .= '
        
            <li class="span3 clearfix">
                <a class="thumbnail" > <img alt="'.$row['Pictures'].'" src="'.$row['Links'].'" /> </a>
                <div class="gd-expander">
                    <div class="gd-inner">
                        <div class="row-fluid">
                            <div class="span6 text-center">
                                <img alt="'.$row['Picturel'].'" class="img-polaroid" src="'.$row['Links'].'" />
                            </div>
                            <div class="span6">
                                <h2>'.$row['Name'].'</h2>
                                <p>'.substr($row['Description'],0,161).'...</p>
                                <a href="project_details.php?pid='.$row['ID'].'" class="btn btn-success">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            ';
}
$conn->close();
?>

<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <?php echo $successStory; ?>
        </div>
    </div>
</section>
