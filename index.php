<?php
    $pathDataFile = __DIR__ . '/data/db.txt';
    if (!empty($_POST['message']) && !empty(trim($_POST['message']))) {
        file_put_contents($pathDataFile, trim($_POST['message']) . '<br>', FILE_APPEND);
    }
    ?>

<?php require __DIR__ . '/partials/header.php' ?>

<form method="POST" action="">
    <input type="text" name="message" id="message"><br>
    <input type="submit" value="Envoyer"><br>
</form>
<p><a href="get.html">Voir les messages en temps réel</a></p>

<?php require __DIR__ . '/partials/footer.php';
