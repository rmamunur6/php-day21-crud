<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$message = '';
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $message = Student::deleteStudentInfo($id);
}


$queryResult = Student::getAllStudentInfo(); //Load all data in view table


?>
<hr>
<a href="add-student.php">Add Student</a>
<hr>
<h1 style="color: deeppink;font-size: xx-large">View Student Section</h1>

<h1 style="color:red; font-size:x-large;"><?php echo $message; ?></h1>

<table border="1" width="1000">
    <tr>
        <th>Student Id</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['email'] ?></td>
            <td><?php echo $student['mobile'] ?></td>
            <td>
                <a href="update-student.php?id=<?php echo $student['id'] ?>">Edit</a> ||
                <a href="?delete=true&id=<?php echo $student['id'] ?>"
                   onclick="return confirm('Are you sure want to delete this Student!?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
