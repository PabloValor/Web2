<?php
session_start();
include '..\..\database\DBManager.php';

use source\database\DBManager;

$db = new DBManager();

$db->bajaViaje($_POST["id"]);