<?php

function db_connect()
{
    try {
        include 'config.php';
        $db = new PDO('pgsql:host='.$config['db']['host'].';port='.$config['db']['port'].';dbname='.$config['db']['name'].';user='.$config['db']['user'].';password='.$config['db']['password']);
        return $db;
    } catch (Exception $e) {
        echo "Failed connection. ".$e->getCode().' '.$e->getMessage().'.';
        return false;
    }
}
