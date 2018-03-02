<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$id=$_GET['id'];
$queryResult=Student::getStudentById($id);
$studentInfo = mysqli_fetch_assoc($queryResult);

if (isset($_POST['btn']))
{
    Student::updateStudentInfo($_POST);
}

?>

<hr>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>
<hr>

<h1 style="color: crimson; font-size: larger">Update Section</h1>

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td>
                <input type="text" value="<?php echo $studentInfo['name']?>" name="name">
                <input type="hidden" value="<?php echo $studentInfo['id'] ?>" name="id">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" value="<?php echo $studentInfo['email'] ?>" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" value="<?php echo $studentInfo['mobile'] ?>" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update" onclick="return confirm('Are you sure want to Update this Student !?')"></td>
        </tr>

    </table>
</form>

