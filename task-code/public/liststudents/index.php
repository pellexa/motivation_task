<?php

include '../../db_connect.php';

if ($db = db_connect()) {
    $sql_exist_student = '
        SELECT * FROM students AS s
            JOIN groups AS g ON s.group_id = g.id
            JOIN ipaddress_student AS lnk ON lnk.student_id = s.id
            JOIN ipaddresses AS ip ON ip.id = lnk.ipaddress_id';
    $sth_exist_student = $db->prepare($sql_exist_student);
    $sth_exist_student->execute();
    $students = $sth_exist_student->fetchAll();
}

?>

<table style="font-size:18px;">
    <thead>
        <tr>
            <th>Student id</th>
            <th>First name</th>
            <th>Second name</th>
            <th>Group</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>IP addresses</th>
            <th>Registration date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $index => $student): ?>
            <tr>
                <td><?php echo $student[0]; ?></td>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['second_name']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['birthday']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['ipaddress']; ?></td>
                <td><?php echo $student['registration_date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>