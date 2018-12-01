<?php

$data = [
    'students' => [
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (1, 'Andrey', 'Ivanov', 1, '1998-12-17', 'a.ivanov@ya.ru', '2018-12-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (2, 'Ivan', 'Petrov', 2, '1998-11-16', 'i.petrov@mail.ru', '2018-10-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (3, 'Elena', 'Dubova', 3, '1998-11-07', 'e.dubova@gmail.com', '2018-09-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (4, 'Olga', 'Frolova', 4, '1998-11-22', 'o.frolova@mail.ru', '2018-10-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (5, 'Nikita', 'Strelcov', 5, '1998-04-11', 'n.strelcov@ya.ru', '2018-02-05 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (6, 'Victoria', 'Molodova', 1, '1998-01-24', 'v.molodova@mail.ru', '2018-06-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (7, 'Alexey', 'Bolotov', 2, '1998-03-14', 'a.bolotov@mail.ru', '2018-03-06 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (8, 'Ksenia', 'Loginova', 3, '1998-03-11', 'k.loginova@ya.ru', '2018-07-14 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (9, 'Ludmila', 'Prokofieva', 4, '1998-08-02', 'l.prokofieva@ya.ru', '2018-06-01 18:34:54')",
        "INSERT INTO students (id, first_name, second_name, group_id, birthday, email, registration_date)
        VALUES (10, 'Anastasia', 'Melnikova', 5, '1998-04-15', 'a.melnikova@ya.ru', '2018-07-12 18:34:54')",
    ],

    'groups' => [
        "INSERT INTO groups (id, name) VALUES (1, '14Ec')",
        "INSERT INTO groups (id, name) VALUES (2, '15Ec')",
        "INSERT INTO groups (id, name) VALUES (3, '16Ec')",
        "INSERT INTO groups (id, name) VALUES (4, '17Ec')",
        "INSERT INTO groups (id, name) VALUES (5, '18Ec')",
    ],

    'ipaddresses' => [
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (1, '1.1.1.1')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (2, '1.1.1.2')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (3, '1.1.1.3')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (4, '1.1.1.4')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (5, '1.1.1.5')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (6, '1.1.1.6')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (7, '1.1.1.7')",
        "INSERT INTO ipaddresses (id, ipaddress) VALUES (8, '1.1.1.8')",
    ],

    'ipaddress_student' => [
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (1, 1, 1)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (2, 2, 2)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (3, 3, 3)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (4, 4, 4)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (5, 5, 5)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (6, 6, 6)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (7, 7, 7)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (8, 8, 8)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (9, 1, 9)",
        "INSERT INTO ipaddress_student (id, ipaddress_id, student_id) VALUES (10, 2, 10)",
    ],

    'subjects' => [
        "INSERT INTO subjects (id, name) VALUES (1, 'Philosophy')",
        "INSERT INTO subjects (id, name) VALUES (2, 'Economyc')",
        "INSERT INTO subjects (id, name) VALUES (3, 'Mathematics')",
        "INSERT INTO subjects (id, name) VALUES (4, 'Astronomy')",
        "INSERT INTO subjects (id, name) VALUES (5, 'Physics')",
        "INSERT INTO subjects (id, name) VALUES (6, 'English')",
        "INSERT INTO subjects (id, name) VALUES (7, 'History')",
    ],

    'student_subject' => [
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (1, 1, 1, 5)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (2, 2, 1, 4)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (3, 1, 2, 3)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (4, 2, 2, 4)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (5, 3, 3, 4)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (6, 4, 4, 3)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (7, 5, 5, 5)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (8, 6, 6, 4)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (9, 7, 7, 4)",
        "INSERT INTO student_subject (id, student_id, subject_id, score) VALUES (10, 8, 8, 5)",
    ],

    'semesters' => [
        "INSERT INTO semesters (id, number, start_date, end_date) VALUES (1, 1, '2017-09-01', '2017-12-31')",
        "INSERT INTO semesters (id, number, start_date, end_date) VALUES (2, 2, '2018-01-10', '2018-06-10')",
    ],

    'semester_subject' => [
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (1, 1, 1)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (2, 1, 2)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (3, 1, 3)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (4, 1, 4)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (5, 1, 5)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (6, 1, 6)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (7, 1, 7)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (8, 2, 1)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (9, 2, 2)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (11, 2, 3)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (12, 2, 4)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (13, 2, 5)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (14, 2, 6)",
        "INSERT INTO semester_subject (id, semester_id, subject_id) VALUES (15, 2, 7)",
    ],

    'teachers' => [
        "INSERT INTO teachers (id, first_name, second_name, birthday, email, registration_date)
        VALUES (1, 'Vyacheclav', 'Kuragin', '1978-12-17', 'v.kuragin@ya.ru', '2000-06-01 18:34:54')",
        "INSERT INTO teachers (id, first_name, second_name, birthday, email, registration_date)
        VALUES (2, 'Gennadiy', 'Gorin', '1980-05-21', 'g.gorin@ya.ru', '2001-04-01 18:34:54')",
        "INSERT INTO teachers (id, first_name, second_name, birthday, email, registration_date)
        VALUES (3, 'Stanislav', 'Modov', '1981-02-10', 's.modov@ya.ru', '2002-08-01 18:34:54')",
        "INSERT INTO teachers (id, first_name, second_name, birthday, email, registration_date)
        VALUES (4, 'Elizaveta', 'Utkina', '1979-03-11', 'e.utkina@ya.ru', '2000-07-01 18:34:54')",
        
    ],

    'recommendation' => [
        "INSERT INTO recommendation (id, teacher_id, student_id, recommendation) VALUES (1, 2, 1, 'Good.')",
        "INSERT INTO recommendation (id, teacher_id, student_id, recommendation) VALUES (2, 1, 4, 'Very good.')",
        "INSERT INTO recommendation (id, teacher_id, student_id, recommendation) VALUES (3, 4, 8, 'Excellent.')",
    ],

    'subject_teacher' => [
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (1, 1, 1)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (2, 2, 2)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (3, 3, 3)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (4, 4, 4)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (5, 5, 2)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (6, 6, 3)",
        "INSERT INTO subject_teacher (id, subject_id, teacher_id) VALUES (7, 7, 4)",
        
    ],
];