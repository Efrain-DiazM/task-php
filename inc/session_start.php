<?php
session_name("I");
session_start();

$host = "localhost:3307";
$dbname = "gestion_tareas";
$username_db = "root";
$password_db = "";

$conn = new mysqli($host, $username_db, $password_db, $dbname);