<?php
include("model/bd.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_post'])) {
    $post_id = $_POST['post_id'];
    $sql = $conexion->prepare("DELETE FROM posts WHERE id_Post = ?");
    if ($sql->execute([$post_id])) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el post.";
    }
}

$sql = $conexion->query("SELECT * FROM posts");
while ($datos = $sql->fetchObject()) { ?>
    <div class="post-preview">
        <div style="display: flex; align-items: center;">
            <div style="flex: 1;">
                <a href="post.php?id=<?= $datos->id_Post ?>">
                    <h2 class="post-title"><?= $datos->title ?></h2>
                    <h3 class="post-subtitle"><?= $datos->subtitle ?></h3>
                </a>
                <p class="post-meta">
                    Publicado por <?= $datos->author ?>
                    el
                    <?= $datos->date ?>
                </p>
            </div>
            <form method="POST">
                <input type="hidden" name="post_id" value="<?= $datos->id_Post ?>">
                <button type="submit" class="btn btn-danger" name="delete_post">Eliminar</button>
            </form>
        </div>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
<?php }
$conexion = null;
?>
