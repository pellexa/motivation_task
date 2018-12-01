<?php

include '../../db_connect.php';
include '../createtables/tables.php';

if ($db = db_connect()) {
    foreach ($tables as $table => $query) {
        echo "<br>".$table." droped.";
        $db->exec('DROP TABLE IF EXISTS '.$table);
    }
}
