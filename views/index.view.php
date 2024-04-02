<?php require "components/head.php" ?>

<?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach ($events as $event) { ?>
        <li> <?= htmlspecialchars($event["datetime"]), " / ", htmlspecialchars($event["event"]), " / ", htmlspecialchars($event["place"]) ?> </li>
    <?php } ?>
    </ul>
</body>
</html>