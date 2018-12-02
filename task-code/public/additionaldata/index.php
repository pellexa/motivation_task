<?php

include '../../db_connect.php';

$student_id = $_GET['student_id'];

if ($db = db_connect()) {
    // Get subject.
    $student_subject = '
        SELECT * FROM students AS s
        JOIN student_subject AS ss ON s.id = ss.student_id
        JOIN subjects AS sbj ON sbj.id = ss.subject_id
        JOIN semesters AS sem ON sem.id = ss.semester_id
        WHERE s.id = '.$student_id;
    $sth_student_subject = $db->prepare($student_subject);
    $sth_student_subject->execute();
    $subjects = $sth_student_subject->fetchAll();
    
    if ($subjects) {
        // Grade point average.
        $summ = 0;
        foreach ($subjects as $index => $arr) {
            $summ += $arr['score'];
        }
        $average = number_format($summ / count($subjects), 2, '.', '');
    }

    // Get recommendation.
    $sql_recommendation = '
        SELECT r.*,t.* FROM students AS s
        JOIN recommendation AS r ON s.id = r.student_id
        JOIN teachers AS t ON r.teacher_id = t.id
        WHERE s.id = '.$student_id;
    $sth_recommendation = $db->prepare($sql_recommendation);
    $sth_recommendation->execute();
    $recommendations = $sth_recommendation->fetchAll();
}

?>

<div>
    <h3>Information about student.</h3>
</div>

<?php if ($subjects): ?>


    <div>
        <div><?php echo $subjects[0]['first_name'].' '.$subjects[0]['second_name']; ?></div>
        <div><?php echo 'Grade point average: '.$average; ?></div>
    </div>
    
    <table style="font-size:18px;">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Score</th>
                <th>Semester</th>
                <th>Start date</th>
                <th>End date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subjects as $index => $subject): ?>
                <tr>
                    <td><?php echo $subject['name']; ?></td>
                    <td><?php echo $subject['score']; ?></td>
                    <td><?php echo $subject['number']; ?></td>
                    <td><?php echo $subject['start_date']; ?></td>
                    <td><?php echo $subject['end_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
<?php endif; ?>

<?php if ($recommendations): ?>
    <div>
        <h4>Recommendations.</h4>
    </div>

    <table style="font-size:18px;">
        <thead>
            <tr>
                <th>Teacher</th>
                <th>Recommendation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recommendations as $index => $recommendation): ?>
                <tr>
                    <td><?php echo $recommendation['first_name'].' '.$recommendation['second_name']; ?></td>
                    <td><?php echo $recommendation['recommendation']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

