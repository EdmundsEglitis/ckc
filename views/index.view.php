<?php require "components/head.php" ?>

<?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach ($events as $event) { ?>
        <a href="/show?id=<?= $event["id"] ?>"> <li> <?= htmlspecialchars($event["datetime"]), " / ", htmlspecialchars($event["event"]), " / ", htmlspecialchars($event["place"]) ?> </li> </a>
    <?php } ?>
    </ul>
</body>
</html>