<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "user_connection",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "connectionString": "mysql:host=localhost;port=;dbname=user_db;charset=utf8;user=root;password=root",
        "limit" : 1000,
        "debug" : false,
        "meta"  : {"allTables": ["users"], "allViews": []}
    }
}
JSON;
?>