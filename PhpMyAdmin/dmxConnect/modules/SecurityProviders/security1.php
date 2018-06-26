<?php
$exports = <<<'JSON'
{
  "name": "security1",
  "module": "auth",
  "action": "provider",
  "options": {
    "secret": "TYqH3CMaWMPE5In",
    "provider": "Database",
    "connection": "connection1",
    "users": {
      "table": "users",
      "identity": "ID",
      "username": "username",
      "password": "password"
    },
    "permissions": {}
  },
  "meta": [
    {
      "name": "identity",
      "type": "text"
    }
  ]
}
JSON;
?>