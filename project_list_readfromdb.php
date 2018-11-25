<?php
/**
 * Generate Project list dynamically
 * Created by Jing Effie Liu
 * Date: 2018/11/18
 */

//connect the database
include_once 'dba.php';
mysqli_set_charset($conn, 'utf8');
$projects = '';
// check the connection with the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
//read and display projects
    $sql = "SELECT ID, Name, StartDate, EndDate, Description, Picture FROM Project ";
    switch ($title) {
        case 'NEW':
            $sql .= 'WHERE utc_date() < StartDate ';
            break;
        case 'CURRENT':
            $sql .= 'WHERE utc_date() BETWEEN StartDate AND EndDate ';
            break;
        case 'PAST':
            $sql .= 'WHERE utc_date() > EndDate ';
            break;
        case 'all':
            break;
    }
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo $sql;
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        if (mysqli_num_rows($result) < 1) {
            $projects = "no any ".$title." project currently ";
        } else {

            while ($row = mysqli_fetch_array($result)) {
                $projects .= '
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="' . $row['Picture'] . '" alt="' . $row['Name'] . '">
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>' . $row['StartDate'] . ' ～ ' . $row['EndDate'] . '</p>
                            <h2>' . $row['Name'] . '</h2>
                        </header>
                        <p>' . substr($row['Description'], 0, 161) . '...</p>
                        <footer class="align-center">
                            <a href="project_details.php?pid=' . $row['ID'] . '" class="button alt">Learn More</a>
                        </footer>
                    </div>
                </div>
            </div>
            ';
            }
        }
    }
}
$conn->close();
?>

<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <?php echo $projects; ?>
        </div>
    </div>
</section>
