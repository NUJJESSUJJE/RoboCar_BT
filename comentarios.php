<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comentarios - RoboCar BT</title>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #0f172a, #1e293b);
    color: white;
    min-height: 100vh;
}

.container{
    width: 90%;
    max-width: 1000px;
    margin: auto;
    padding: 40px 20px;
}

.header{
    text-align: center;
    margin-bottom: 30px;
}

.header h1{
    font-size: 50px;
    color: #38bdf8;
    margin-bottom: 10px;
}

.back{
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background: #38bdf8;
    color: #0f172a;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
}

.back:hover{
    background: #0ea5e9;
}

form{
    background: rgba(255,255,255,0.05);
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;
}

input, textarea{
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border-radius: 8px;
    border: none;
    outline: none;
    font-family: Arial;
}

button{
    margin-top: 10px;
    padding: 12px 20px;
    background: #38bdf8;
    border: none;
    color: #0f172a;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
}

button:hover{
    background: #0ea5e9;
}

.comment{
    background: rgba(255,255,255,0.05);
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;
}

.comment h3{
    color: #38bdf8;
    margin-bottom: 10px;
}

.reply{
    margin-left: 20px;
    margin-top: 10px;
    background: rgba(255,255,255,0.08);
    padding: 10px;
    border-radius: 10px;
}

.section-title{
    margin-top: 40px;
    margin-bottom: 10px;
    color: #38bdf8;
}

</style>

</head>

<body>

<div class="container">

    <div class="header">

        <h1>Comentarios</h1>

        <a class="back" href="index.php">
            ← Volver al inicio
        </a>

    </div>

    <form action="comments.php" method="POST">

        <input type="text" name="name" placeholder="Tu nombre" required>

        <textarea name="comment" placeholder="Escribe un comentario" required></textarea>

        <button type="submit">Enviar comentario</button>

    </form>

    <h2 class="section-title">Últimos comentarios</h2>

<?php

$db = new SQLite3('database.db');

$results = $db->query("
    SELECT * FROM comments
    ORDER BY id DESC
");

while ($row = $results->fetchArray()) {

    $comment_id = $row['id'];

?>

    <div class="comment">

        <h3><?php echo htmlspecialchars($row['name']); ?></h3>

        <p><?php echo htmlspecialchars($row['comment']); ?></p>

        <?php

        $replies = $db->query("
            SELECT * FROM replies
            WHERE comment_id = $comment_id
            ORDER BY id ASC
        ");

        while ($reply = $replies->fetchArray()) {

        ?>

            <div class="reply">

                <strong><?php echo htmlspecialchars($reply['name']); ?></strong>

                <p><?php echo htmlspecialchars($reply['reply']); ?></p>

            </div>

        <?php } ?>

        <form action="reply.php" method="POST">

            <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">

            <input type="text" name="name" placeholder="Tu nombre" required>

            <textarea name="reply" placeholder="Responder comentario" required></textarea>

            <button type="submit">Responder</button>

        </form>

        <form action="delete.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $comment_id; ?>">

            <input type="password" name="admin_password" placeholder="Contraseña admin" required>

            <button type="submit">Eliminar</button>

        </form>

    </div>

<?php } ?>

</div>

</body>
</html>
