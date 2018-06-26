<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "options": {
      "linkedFile": "/login1.php"
    },
    "$_POST": [
      {
        "type": "text",
        "fieldName": "email",
        "name": "email"
      },
      {
        "type": "text",
        "fieldName": "password",
        "name": "password"
      }
    ]
  },
  "exec": {
    "steps": [
      "Connections/connection1",
      "SecurityProviders/security1",
      {
        "name": "identity",
        "module": "auth",
        "action": "login",
        "options": {
          "provider": "security1",
          "username": "{{$_POST.email}}"
        },
        "output": true,
        "meta": [
          {
            "name": "identity",
            "type": "text"
          }
        ]
      }
    ]
  }
}
JSON
);
?>