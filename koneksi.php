<?php

// membuat variable untuk koneksi
$db_host = "localhost";
$db_database = "dbsiswa";
$db_username = "root";
$db_password = "";
$db_port = "3306";

// membuat koneksi
$db1 = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);

// cek koneksi
if ($db1-> connect_error) {
    die('Connection failed:' . $db1->connect_error);
}