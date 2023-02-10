<?php

require_once "database.php";

$id = $_GET["id"] ?? "";

if (!$id) {
    header("Location: /");
    die();
}

$stmt = $pdo->prepare("DELETE FROM pizza WHERE id = ?");
$stmt->bindValue(1, $id);

$stmt->execute();

header("Refresh: 2; url=/");
die("De pizza is verwijderd.");
