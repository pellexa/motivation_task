<?php
if ($_POST) {
    include '../../db_connect.php';

    if ($db = db_connect()) {
        $db->beginTransaction();
        try {
            // First, check an existing group.
            $sql_exist_group = 'SELECT id FROM groups WHERE name ILIKE :name';
            $sth_exist_group = $db->prepare($sql_exist_group);
            $sth_exist_group->execute([':name' => $_POST['group_name']]);
            $exist_group = $sth_exist_group->fetch();

            if ($exist_group['id']) {
                $group_id = $exist_group['id'];
            } else {
                $sql_group = 'INSERT INTO groups (name) VALUES (:name)';
                $sth_group = $db->prepare($sql_group);
                $sth_group->execute([':name' => $_POST['group_name']]);
                $group_id = $db->lastInsertId();
            }

            // Second, check an existing ipaddress.
            $sql_exist_ipaddress = 'SELECT id FROM ipaddresses WHERE ipaddress = :ipaddress';
            $sth_exist_ipaddress = $db->prepare($sql_exist_ipaddress);
            $sth_exist_ipaddress->execute([':ipaddress' => $_POST['ip']]);
            $exist_ipaddress = $sth_exist_ipaddress->fetch();

            if ($exist_ipaddress['id']) {
                $ipaddress_id = $exist_ipaddress['id'];
            } else {
                $sql_ipaddress = 'INSERT INTO ipaddresses (ipaddress) VALUES (:ipaddress)';
                $sth_ipaddress = $db->prepare($sql_ipaddress);
                $sth_ipaddress->execute([':ipaddress' => $_POST['ip']]);
                $ipaddress_id = $db->lastInsertId();
            }

            // Third, check an existing student.
            $sql_exist_student = 'SELECT id FROM students WHERE email ILIKE :email';
            $sth_exist_student = $db->prepare($sql_exist_student);
            $sth_exist_student->execute([':email' => $_POST['email']]);
            $exist_student = $sth_exist_student->fetch();

            if ($exist_student['id']) {
                // Update student.
                $student_id = $exist_student['id'];
                $sql_student = '
                    UPDATE students
                    SET first_name = :first_name,
                        second_name = :second_name,
                        group_id = :group_id,
                        birthday = :birthday,
                        email = :email
                    WHERE id = '.$student_id;

                $sth_student = $db->prepare($sql_student);
                $sth_student->execute([
                    ':first_name' => $_POST['first_name'],
                    ':second_name' => $_POST['second_name'],
                    ':group_id' => $group_id,
                    ':birthday' => $_POST['birthday'],
                    ':email' => $_POST['email'],
                ]);
            } else {
                // Create student.
                $sql_student = '
                    INSERT INTO students
                        (first_name, second_name, group_id, birthday, email, registration_date)
                    VALUES
                        (:first_name, :second_name, :group_id, :birthday, :email, :registration_date)
                ';
                $sth_student = $db->prepare($sql_student);
                $sth_student->execute([
                    ':first_name' => $_POST['first_name'],
                    ':second_name' => $_POST['second_name'],
                    ':group_id' => $group_id,
                    ':birthday' => $_POST['birthday'],
                    ':email' => $_POST['email'],
                    ':registration_date' => date("Y-m-d H:i:s"),
                ]);
                $student_id = $db->lastInsertId();
            }

            // Fourth, check an existence relationship ipaddress-to-student.
            $sql_exist_relationship = '
                SELECT id FROM ipaddress_student 
                    WHERE ipaddress_id = :ipaddress_id
                        AND student_id = :student_id';
            $sth_exist_relationship = $db->prepare($sql_exist_relationship);
            $sth_exist_relationship->execute([
                ':ipaddress_id' => $ipaddress_id,
                ':student_id' => $student_id,
            ]);
            $exist_relationship = $sth_exist_relationship->fetch();

            if (!$exist_relationship['id']) {
                // Create relationship with ipaddress.
                $sql_relationship = '
                    INSERT INTO ipaddress_student
                        (ipaddress_id, student_id)
                    VALUES
                        (:ipaddress_id, :student_id)
                ';
                $sth_relationship = $db->prepare($sql_relationship);
                $sth_relationship->execute([
                    ':ipaddress_id' => $ipaddress_id,
                    ':student_id' => $student_id,
                ]);
            }

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            echo "Error: ".$e->getCode().' '.$e->getMessage().'.';
        }
    }
} else {
    return include 'form.html';
}