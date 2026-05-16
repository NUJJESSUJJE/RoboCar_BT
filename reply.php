<?php

$db = new SQLite3('database.db');

$comment_id = $_POST['comment_id'];
$name = $_POST['name'];
$reply = $_POST['reply'];

$stmt = $db->prepare("
INSERT INTO replies (comment_id, name, reply)
VALUES (:comment_id, :name, :reply)
");

$stmt->bindValue(':comment_id', $comment_id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':reply', $reply);

$stmt->execute();

header("Location: comentarios.php");
exit;

?>
