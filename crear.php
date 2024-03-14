<?php
session_start();

if (isset($_POST['submit'])) {
    include('model/bd.php');

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    $date = $_POST['date']; 

    $sql = $conexion->prepare("INSERT INTO posts (title, subtitle, author, post, date) VALUES (?, ?, ?, ?, ?)");

    if ($sql->execute([$title, $subtitle, $author, $post, $date])) {
        $_SESSION['success'] = "Referencia creada exitosamente";
        header("Location: index.php");
        exit();
    } else {
        echo "Error al ejecutar la consulta SQL";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <?php include 'items/nav.html'; ?>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/yuta.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Nuevo Post</h1>
                        <span class="subheading">Crea un nuevo post para tu blog</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post creation form -->
                    <form method="POST">
                        <div class="form-group">
                            <label for="title">Título del Post</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtítulo del Post</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Autor</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="post">Contenido del Post</label>
                            <textarea class="form-control" id="post" name="post" rows="8" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Crear Post</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <?php include 'items/footer.html'; ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
