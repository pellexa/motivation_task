<?php

include '../../db_connect.php';
include 'data.php';

if ($db = db_connect()) {
    foreach ($data as $table => $queries) {
        for ($i = 0; $i < count($queries); $i++) {
            $db->exec($queries[$i]);
        }
    }
    echo "Data created.";
}
