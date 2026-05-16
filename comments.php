<?php

$db = new SQLite3('database.db');

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "
INSERT INTO comments (name, comment)
VALUES ('$name', '$comment')
";

$db->exec($sql);

header("Location: comentarios.php");
exit;

?>

delete.php

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
