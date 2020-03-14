<?php
session_start();

$success_alerts = array();
$errors = array();
$warnings = array();

$db = mysqli_connect('remotemysql.com', '9giU7km1IB', 'kB3YAJX9hD', '9giU7km1IB');

$query = "SELECT * FROM `videochiamate` WHERE `ID`=1"
$result = mysqli_query($db, $query);
$risultato = mysqli_fetch_all($result);
echo $risultato [0] [5];
?>
