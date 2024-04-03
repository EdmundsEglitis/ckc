<?php

require "Database.php";
$config = require "config.php";
$db = new Database($config);
if(isset($_GET["when"]) && isset($_GET["event"]) && isset($_GET["where"])){
$errors = [];
if(trim($_GET["event"]) == "") {
    $errors["event"] = "da event is empty blud";
}

if(strlen($_GET["event"]) > 255) {
    $errors["event"] = "da event is too long you twat";
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