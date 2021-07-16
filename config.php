<?php

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'db_relawan';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
date_default_timezone_set('Asia/Jakarta');
