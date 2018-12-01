#!/bin/bash

psql -U postgres <<-EOSQL
    CREATE USER student_user WITH PASSWORD 'password';
    CREATE DATABASE student_registry;
    GRANT ALL PRIVILEGES ON DATABASE "student_registry" TO student_user;
EOSQL

