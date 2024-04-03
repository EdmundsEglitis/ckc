<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM ckc_kolektivi WHERE id = :id";

$params = [":id" => $_GET["id"] ];

$kolektivi = $db->execute($query, $params)->fetch();

require "views/kolektivi.show.view.php";
