<?php
require "validator.php";
require "Database.php";

$config = require "config.php";
$db = new Database($config);
if(isset($_GET["when"]) && isset($_GET["event"]) && isset($_GET["where"])){
$errors = [];
if(!Validator::string($_GET["event"], min: 1, max: 255)) {
    $errors["event"] = "da title invaliids";
}


if(empty($errors)){
    $query = "INSERT INTO ckc_events (datetime,event,place)
    VALUES (:datetime, :event, :place);";
    $params = [
        ":datetime" => $_GET["when"],
        ":event" => $_GET["event"],
        ":place" => $_GET["where"]
    ];
    var_dump($params);
    var_dump($query);
    $db->execute($query, $params);

    header('Location: '. "/");
    die();
}
}


require "views/add.view.php";