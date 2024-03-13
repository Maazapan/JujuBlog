<?php
                include("model/bd.php");
                $sql = $conexion ->query("SELECT * FROM posts");
                while($datos=$sql->fetchObject())
                { ?>
                    <div class="post-preview">
                        <a href="post.php?id=<?= $datos ->id_Post ?>" >
                            <h2 class="post-title"><?= $datos ->title ?></h2>
                            <h3 class="post-subtitle"><?= $datos ->subtitle ?></h3>
                        </a>
                        <p class="post-meta">
                            Publicado por <?= $datos ->author ?>
                            el 
                            <?= $datos ->date ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php }  
                    $conexion = null;
                        ?>