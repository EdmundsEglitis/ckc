<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<?php require "components/navbar.php" ?>
<body>
    <h1>Add events</h1>
    <form>
        <label>
            When YYYY-DD-MM HH-MM-SS:
            <input class="create" type="text" name="when">
            Event:
            <input class="create" type="text" name="event">
            Where:
            <input class="create" type="text" name="where">
        </label>
        
        <button>Submit</button>
    </form>
</body>
</html>