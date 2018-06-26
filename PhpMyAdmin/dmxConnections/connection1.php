<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$dmxConnectionString = "mysql:host=localhost;port=;dbname=user_db;charset=utf8;user=root;password=root";
$dmxConnectionLimit = 1000;
$dmxConnectionDebug = false;

$dmxConnectionMeta = <<<JSON
{"allTables": ["users"], "allViews": [], "tables": {"users": {"columns": {"ID": {"type": "int"}, "username": {"type": "varchar", "size": 100}, "password": {"type": "varchar", "size": 100}, "email_address": {"type": "varchar", "size": 100}, "user_type": {"type": "varchar", "size": 100}}}}}
JSON;
?>