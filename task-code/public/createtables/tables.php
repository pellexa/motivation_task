<?php

$tables = [
    'students' => "
            CREATE TABLE students (
                id serial PRIMARY KEY,
                first_name varchar(255) NOT NULL,
                second_name varchar(255) NOT NULL,
                group_id integer NOT NULL,
                birthday date,
                email varchar(255) NOT NULL,
                registration_date timestamp NOT NULL,
                UNIQUE(email)
            );
        ",
    
    'groups' => "
            CREATE TABLE groups (
                id serial PRIMARY KEY,
                name varchar(255) NOT NULL,
                UNIQUE(name)
            );
        ",
    
    'ipaddresses' => "
            CREATE TABLE ipaddresses (
                id serial PRIMARY KEY,
                ipaddress inet NOT NULL,
                UNIQUE(ipaddress)
            );
        ",
    
    'ipaddress_student' => "
            CREATE TABLE ipaddress_student (
                id serial PRIMARY KEY,
                ipaddress_id integer NOT NULL,
                student_id integer NOT NULL,
                UNIQUE(ipaddress_id, student_id)
            );
        ",
    
    'subjects' => "
            CREATE TABLE subjects (
                id serial PRIMARY KEY,
                name varchar(255) NOT NULL,
                UNIQUE(name)
            );
        ",
    
    'student_subject' => "
            CREATE TABLE student_subject (
                id serial PRIMARY KEY,
                student_id integer NOT NULL,
                subject_id integer NOT NULL,
                score smallserial DEFAULT 0,
                UNIQUE(student_id, subject_id)
            );
        ",
    
    'semesters' => "
            CREATE TABLE semesters (
                id serial PRIMARY KEY,
                number smallserial NOT NULL,
                start_date date,
                end_date date,
                UNIQUE(number, start_date, end_date)
            );
        ",
    
    'semester_subject' => "
            CREATE TABLE semester_subject (
                id serial PRIMARY KEY,
                semester_id integer NOT NULL,
                subject_id integer NOT NULL,
                UNIQUE(semester_id, subject_id)
            );
        ",
    
    'teachers' => "
            CREATE TABLE teachers (
                id serial PRIMARY KEY,
                first_name varchar(255) NOT NULL,
                second_name varchar(255) NOT NULL,
                birthday date,
                email varchar(255) NOT NULL,
                registration_date timestamp NOT NULL,
                UNIQUE(email)
            );
        ",
    
    'recommendation' => "
            CREATE TABLE recommendation (
                id serial PRIMARY KEY,
                teacher_id integer NOT NULL,
                student_id integer NOT NULL,
                recommendation text NOT NULL,
                UNIQUE(teacher_id, student_id)
            );
        ",

    'subject_teacher' => "
            CREATE TABLE subject_teacher (
                id serial PRIMARY KEY,
                subject_id integer NOT NULL,
                teacher_id integer NOT NULL,
                UNIQUE(subject_id, teacher_id)
            );
        ",
];