<?php

include '../../db_connect.php';
include 'data.php';

if ($db = db_connect()) {
    $db->beginTransaction();
    try {
        foreach ($data as $table => $queries) {
            for ($i = 0; $i < count($queries); $i++) {
                $db->exec($queries[$i]);
            }
        }
        $db->commit();
        echo "Data created.";
    } catch (Exception $e) {
        $db->rollback();
        echo "Error: ".$e->getCode().' '.$e->getMessage().'.';
    }
}
