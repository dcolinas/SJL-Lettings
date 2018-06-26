<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "connection1",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "connectionString": "mysql:host=localhost;port=;dbname=user_db;charset=utf8;user=root;password=root",
        "limit" : 1000,
        "debug" : false,
        "meta"  : {"allTables": ["users"], "allViews": [], "tables": {"users": {"columns": {"ID": {"type": "int"}, "username": {"type": "varchar", "size": 100}, "password": {"type": "varchar", "size": 100}, "email_address": {"type": "varchar", "size": 100}, "user_type": {"type": "varchar", "size": 100}}}}}
    }
}
JSON;
?>