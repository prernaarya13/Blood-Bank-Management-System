<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'bld_dntn';

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_error($con));
}
?>