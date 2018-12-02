<?php

$data = [
    'students' => [
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Andrey', 'Ivanov', 1, '1998-12-17', 'a.ivanov@ya.ru', '2018-12-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Ivan', 'Petrov', 2, '1998-11-16', 'i.petrov@mail.ru', '2018-10-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Elena', 'Dubova', 3, '1998-11-07', 'e.dubova@gmail.com', '2018-09-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Olga', 'Frolova', 4, '1998-11-22', 'o.frolova@mail.ru', '2018-10-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Nikita', 'Strelcov', 5, '1998-04-11', 'n.strelcov@ya.ru', '2018-02-05 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Victoria', 'Molodova', 1, '1998-01-24', 'v.molodova@mail.ru', '2018-06-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Alexey', 'Bolotov', 2, '1998-03-14', 'a.bolotov@mail.ru', '2018-03-06 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Ksenia', 'Loginova', 3, '1998-03-11', 'k.loginova@ya.ru', '2018-07-14 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Ludmila', 'Prokofieva', 4, '1998-08-02', 'l.prokofieva@ya.ru', '2018-06-01 18:34:54')",
        "INSERT INTO students (first_name, second_name, group_id, birthday, email, registration_date)
        VALUES ('Anastasia', 'Melnikova', 5, '1998-04-15', 'a.melnikova@ya.ru', '2018-07-12 18:34:54')",
    ],

    'groups' => [
        "INSERT INTO groups (name) VALUES ('14Ec')",
        "INSERT INTO groups (name) VALUES ('15Ec')",
        "INSERT INTO groups (name) VALUES ('16Ec')",
        "INSERT INTO groups (name) VALUES ('17Ec')",
        "INSERT INTO groups (name) VALUES ('18Ec')",
    ],

    'ipaddresses' => [
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.1')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.2')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.3')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.4')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.5')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.6')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.7')",
        "INSERT INTO ipaddresses (ipaddress) VALUES ('1.1.1.8')",
    ],

    'ipaddress_student' => [
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (1, 1)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (2, 2)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (3, 3)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (4, 4)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (5, 5)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (6, 6)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (7, 7)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (8, 8)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (1, 9)",
        "INSERT INTO ipaddress_student (ipaddress_id, student_id) VALUES (2, 10)",
    ],

    'subjects' => [
        "INSERT INTO subjects (name) VALUES ('Philosophy')",
        "INSERT INTO subjects (name) VALUES ('Economyc')",
        "INSERT INTO subjects (name) VALUES ('Mathematics')",
        "INSERT INTO subjects (name) VALUES ('Astronomy')",
        "INSERT INTO subjects (name) VALUES ('Physics')",
        "INSERT INTO subjects (name) VALUES ('English')",
        "INSERT INTO subjects (name) VALUES ('History')",
    ],

    'student_subject' => [
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 1, 1, 5)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (2, 1, 1, 4)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 2, 1, 3)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (2, 2, 1, 4)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (3, 3, 2, 4)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (4, 4, 2, 3)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (5, 5, 2, 5)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (6, 6, 2, 4)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (7, 7, 1, 4)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (8, 8, 1, 5)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 3, 1, 3)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 4, 2, 3)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 5, 2, 3)",
        "INSERT INTO student_subject (student_id, subject_id, semester_id, score) VALUES (1, 6, 2, 3)",
    ],

    'semesters' => [
        "INSERT INTO semesters (number, start_date, end_date) VALUES (1, '2017-09-01', '2017-12-31')",
        "INSERT INTO semesters (number, start_date, end_date) VALUES (2, '2018-01-10', '2018-06-10')",
    ],

    'semester_subject' => [
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 1)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 2)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 3)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 4)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 5)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 6)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (1, 7)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 1)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 2)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 3)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 4)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 5)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 6)",
        "INSERT INTO semester_subject (semester_id, subject_id) VALUES (2, 7)",
    ],

    'teachers' => [
        "INSERT INTO teachers (first_name, second_name, birthday, email, registration_date)
        VALUES ('Vyacheclav', 'Kuragin', '1978-12-17', 'v.kuragin@ya.ru', '2000-06-01 18:34:54')",
        "INSERT INTO teachers (first_name, second_name, birthday, email, registration_date)
        VALUES ('Gennadiy', 'Gorin', '1980-05-21', 'g.gorin@ya.ru', '2001-04-01 18:34:54')",
        "INSERT INTO teachers (first_name, second_name, birthday, email, registration_date)
        VALUES ('Stanislav', 'Modov', '1981-02-10', 's.modov@ya.ru', '2002-08-01 18:34:54')",
        "INSERT INTO teachers (first_name, second_name, birthday, email, registration_date)
        VALUES ('Elizaveta', 'Utkina', '1979-03-11', 'e.utkina@ya.ru', '2000-07-01 18:34:54')",

    ],

    'recommendation' => [
        "INSERT INTO recommendation (teacher_id, student_id, recommendation) VALUES (2, 1, 'Good.')",
        "INSERT INTO recommendation (teacher_id, student_id, recommendation) VALUES (1, 4, 'Very good.')",
        "INSERT INTO recommendation (teacher_id, student_id, recommendation) VALUES (4, 8, 'Excellent.')",
    ],

    'subject_teacher' => [
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (1, 1)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (2, 2)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (3, 3)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (4, 4)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (5, 2)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (6, 3)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (7, 4)",
        "INSERT INTO subject_teacher (subject_id, teacher_id) VALUES (1, 4)",
    ],
];

