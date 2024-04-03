<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1><?= htmlspecialchars($event["event"]) ?></h1>
<h3><?= htmlspecialchars($event["place"]) ?></h3>
<h3><?= htmlspecialchars($event["datetime"]) ?></h3>


</body>
</html>