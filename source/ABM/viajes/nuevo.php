<?php
session_start();
include '..\..\database\DBManager.php';

use source\database\DBManager;

$db = new DBManager();
$db->altaViaje($_POST);