<?php
/**
 * Application Form Page
 * 1. display application form (dynamically load project and skill data from the database)
 * 2. upload CV file with limited size
 * Created by Jing Effie Liu.
 * Date: 2018/11/16
 */

//load header of the page
include_once 'header.html';

//connect the database
include_once 'dba.php';
mysqli_set_charset($conn, 'utf8');
// 判断当前连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
//read and display projects
$sql_prj = "SELECT ID, Name FROM Project";
$result_prj = mysqli_query($conn, $sql_prj);
$projects = '<option value=""></option>';
while ($row_prj = mysqli_fetch_array($result_prj)) {
    $projects .= '<option value = "' . $row_prj['ID'] . '">' . $row_prj['Name'] . '</option>';
}
//read and display skills
$sql_skill = "SELECT ID, Name FROM Skills";
$result_skill = mysqli_query($conn, $sql_skill);
$skill = '';
$skills = '';
while ($row_skill = mysqli_fetch_array($result_skill)) {
    $selectid = $row_skill['Name'];
    $skill .= '<tr>
                    <td width="30%"><span>' . $row_skill['Name'] . '</span></td>
                    <td><select name = "' . $selectid . '" key="' . $row_skill['ID'] . '" onchange="selectedSkill(\'' . $selectid . '\')">
                            <option value="0"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option> 
                         </select> 
                         <input name="' . $selectid . '_id" type="text" style="display: none"> <!--skill id-->
                         <input name="' . $selectid . '_value" type="text" style="display: none"> <!--skill proficiency-->
                     </td>
                 </tr>
                 ';
    $skills .= $row_skill['Name'].";";
}
$skills = '<tr style="display: none"><td colspan="2"><input name="skills" value="' . $skills . '" type="text" ></td> </tr>';
$conn->close();

?>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>We've been waiting for you</p>
            <h2>Join us</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <div align="center"><h2>APPLICATION FORM</h2></div>
                <form class="application-form" action="applyform_submit.php" method="post" target="_blank"
                      enctype="multipart/form-data">
                    <table>
                        <tr style="visibility: collapse">
                            <th width="10%" style="color: white">field</th>
                            <th width="30%" style="color: white">Name</th>
                        </tr>
                        <tr style="background-color: white">
                            <td>Project Preference 1:</td>
                            <td>
                                <select name="prjprefer1" onchange="preferredProject('prjprefer1')">
                                    <?php echo $projects; ?>
                                </select>
                                <input name="prjprefer1_id" type="text" style="display: none">
                                <input name="prjprefer1_value" type="text" style="display: none">
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Project Preference 2:</td>
                            <td>
                                <select name="prjprefer2" onchange="preferredProject('prjprefer2')">
                                    <?php echo $projects; ?>
                                </select>
                                <input name="prjprefer2_id" type="text" style="display: none">
                                <input name="prjprefer2_value" type="text" style="display: none">
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Project Preference 3:</td>
                            <td>
                                <select name="prjprefer3" onchange="preferredProject('prjprefer3')">
                                    <?php echo $projects; ?>
                                </select>
                                <input name="prjprefer3_id" type="text" style="display: none">
                                <input name="prjprefer3_value" type="text" style="display: none">
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Student ID:</td>
                            <td><input type="text" name="sid" placeholder="Your student number"></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>First Name:</td>
                            <td><input type="text" name="firstname" placeholder="Your first name"></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Last Name:</td>
                            <td><input type="text" name="lastname" placeholder="Your last name"></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Study Area:</td>
                            <td>
                                <select name="studyarea">
                                    <option id="1">ICT</option>
                                    //获取
                                    document.getElementById("mySelect").//;document.getElementById("mySelect").text;
                                    <option id="2">Engineering</option>
                                    <option id="3">Other</option>
                                </select>

                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Degree:</td>
                            <td>
                                <select name="degree">
                                    <option id="1">Bachelor</option>
                                    <option id="2">Honours</option>
                                    <option id="3">Master</option>
                                    <option id="4">Phd</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Enrolled Semester:</td>
                            <td>
                                <select name="year">
                                    <option value="1">Year 1</option>
                                    <option value="2">Year 2</option>
                                    <option value="3">Year 3</option>
                                    <option value="4">Year 4</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Campus:</td>
                            <td>
                                <select name="campus">
                                    <option id="1">Hobart</option>
                                    <option id="2">Launceston</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Programming Skills:</td>
                            <td>
                                <table>
                                    <?php echo $skills; ?>
                                    <?php echo $skill; ?>
                                    <tr>
                                        <td colspan="2"><textarea name="otherskills"
                                                                  placeholder="Type other programming skills"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Experience:</td>
                            <td><textarea name="experience" placeholder="Describe your experience"></textarea></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>CV Attachment:</td>
                            <td>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <!-- php.ini 需要配置 file_uploads = On -->

                            </td>
                        </tr>
                    </table>
                    <div align="center">
                        <button type="submit" name="submit" class="btn-link">Apply Now</button>
                    </div>

                    <!-- make button display as a link
                    <style>
                        .btn-link{
                            border:none;
                            outline:none;
                            background:none;
                            cursor:pointer;
                            color:#0000EE;
                            padding:0;
                            text-decoration:underline;
                            font-family:inherit;
                            font-size:inherit;
                        }
                    </style>
                    -->
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script>
    function selectedSkill(id) {
        var x = document.getElementsByName(id)[0];
        document.getElementsByName(id + '_id')[0].value = x.attributes['key'].value;
        document.getElementsByName(id + '_value')[0].value = x.value;
    }
    function preferredProject(id) {
        var x = document.getElementsByName(id)[0];
        document.getElementsByName(id + '_id')[0].value = x.options[x.selectedIndex].value;
        document.getElementsByName(id + '_value')[0].value = x.options[x.selectedIndex].text;
    }
</script>

<?php
include_once 'footer.html';
?>