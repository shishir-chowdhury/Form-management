<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
         $student_name = $_POST['sname'];
         $student_roll = $_POST['sroll'];
         $student_cell = $_POST['scell'];
    ?>
    <div class="log">
        <h2>Add new student</h2>
        <hr>
        <form action="" method="POST">
        <input name="sname"type="text" placeholder="Student Name">
        <input name="sroll"type="text" placeholder="Student Roll">
        <input name="scell"type="text" placeholder="Student Cell">
        <input name="student_entry"type="submit" value="Add Student">
        </form>
    </div>
    
</body>
</html>