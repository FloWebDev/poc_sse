<?php
// Set file mime type event-stream
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$pathDataFile = __DIR__ . '/data/db.txt';

// Echo data
echo 'data: ' . file_get_contents($pathDataFile) . PHP_EOL . PHP_EOL;

// Flush buffer (force sending data to client)
flush();

// On ferme la boucle si le client a interrompu la connexion
// (par exemple en fermant la page)
if (connection_aborted()) {
    exit;
}

// Wait 2 seconds for the next message / event
sleep(2);
