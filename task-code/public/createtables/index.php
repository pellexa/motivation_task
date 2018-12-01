<?php

include '../../db_connect.php';
include 'tables.php';

if ($db = db_connect()) {
    foreach ($tables as $table => $query) {
        echo "<br>".$table." created.";
        $db->exec($query);
    }
}
