#!/bin/bash

psql -U postgres <<-EOSQL
    CREATE USER user WITH PASSWORD 'password';
    CREATE DATABASE student_registry;
    GRANT ALL PRIVILEGES ON DATABASE "student_registry" TO user;
EOSQL

