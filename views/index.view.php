<?php require "components/head.php" ?>

<?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach ($events as $event) { ?>
        <li> <?= $event["datetime"], " / ", $event["event"], " / ", $event["place"] ?> </li>
    <?php } ?>
    </ul>
</body>
</html>