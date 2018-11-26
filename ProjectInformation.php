<?php
/**
 * Add a project and save the data to database
 * Created by Jing Effie Liu.
 * Date: 2018/11/25
 */

//load header of the page
include_once 'header.html';

//connect the database
include_once 'dba.php';
mysqli_set_charset($conn, 'utf8');
// 判断当前连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

//read and display skills
    $sql_skill = "SELECT ID, Name FROM Skills";
    $result_skill = mysqli_query($conn, $sql_skill);
    $skill_table = ''; //for drawing a table and displaying on the page
    $skills = ''; // for recording the skills read as a hidden text
    while ($row_skill = mysqli_fetch_array($result_skill)) {
        $selectid = $row_skill['Name'];
        $skill_table .= '<tr>
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
        $skills .= $row_skill['Name'] . ";";
    }
    $skills = '<tr style="display: none"><td colspan="2"><input name="skills" value="' . $skills . '" type="text" ></td> </tr>';
}
$conn->close();

?>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <h2>Register a new project</h2>
            <p>Fill in the project information here</p>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <div align="center"><h2>PROJECT INFORMATION</h2></div>
                <form class="application-form" action="ProjectInfor_Submit.php" method="post" target="_blank"
                      enctype="multipart/form-data">
                    <table>
                        <tr style="visibility: collapse">
                            <th width="10%" style="color: white">field</th>
                            <th width="30%" style="color: white">Name</th>
                            <th width="10%" style="color: white">field</th>
                            <th width="30%" style="color: white">Name</th>
                        </tr>
                        <tr style="background-color: white">
                            <td>Project Name:</td>
                            <td colspan="3"><input type="text" name="ProjectName" placeholder="Project Name"></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Start Date:</td>
                            <td><input type="date" name="StartDate" value = <?php echo date("Y-m-d") ?> ></td>
                            <td>End Date:</td>
                            <td><input type="date" name="EndDate" value = <?php echo date("Y-m-d") ?> ></td>
                        </tr>
                        <tr style="background-color: white" valign="top">
                            <td colspan="2">Programming Skills:<br>
                                <table>
                                    <?php echo $skills; ?>
                                    <?php echo $skill_table; ?>
                                </table>
                            </td>
                            <td colspan="2">Project Description:<br><textarea name="Description" style="height: 380px;vertical-align:top;" placeholder="Project Description"></textarea></td>
                        </tr>
                        <tr style="background-color: white">
                            <td>Project Picture</td>
                            <td colspan="3">
                                <input id="pic" type="file" name='pic' accept="image/*" onchange="selectFile()"/>
                                <div id="picpreview"></div>
                            </td>
                        </tr>
                    </table>
                    <div align="center">
                        <button type="submit" name="submit" class="btn-link">Submit</button>
                    </div>


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

    /*** for picture preview ***/
    //var files = document.getElementById('pic').files;
    var form = new FormData();//通过HTML表单创建FormData对象
    var url = '127.0.0.1:8080/'

    function selectFile() {
        var files = document.getElementById('pic').files;
        console.log(files[0]);
        if (files.length == 0) {
            return;
        }
        var file = files[0];
        //把上传的图片显示出来
        var reader = new FileReader();
        // 将文件以Data URL形式进行读入页面
        console.log(reader);
        reader.readAsBinaryString(file);
        reader.onload = function (f) {
            var result = document.getElementById("picpreview");
            var src = "data:" + file.type + ";base64," + window.btoa(this.result);
            result.innerHTML = '<img src ="' + src + '"/>';
        }
        console.log('file', file);
        ///////////////////
        form.append('file', file);
        console.log(form.get('file'));
    }

</script>

<?php
include_once 'footer.html';
?>