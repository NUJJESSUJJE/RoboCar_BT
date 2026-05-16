<?php

$admin_password = "RoboCar2026";

if (!isset($_POST['admin_password']) || $_POST['admin_password'] !== $admin_password) {

    header("Location: comentarios.php");
    exit;

}

$db = new SQLite3('database.db');

$id = $_POST['id'];

$stmt = $db->prepare("
DELETE FROM comments
WHERE id = :id
");

$stmt->bindValue(':id', $id);

$stmt->execute();

header("Location: comentarios.php");
exit;

?>
