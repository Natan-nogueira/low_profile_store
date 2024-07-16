<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Produto</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php include '../public/header.php'; ?>
    <div class="container">
        <h1 class="my-4">Tipo de Produto</h1>
        <button class="btn btn-primary float-right mb-2" data-toggle="modal" data-target="#myModal">Adicionar Produto</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data dt_cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../app/config/db_con.php';

                $stmt = $pdo->query('SELECT id, descricao, dt_cadastro FROM low_profile.tipo_produto');
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($produto['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($produto['descricao']) . '</td>';
                    echo '<td>' . htmlspecialchars($produto['dt_cadastro']) . '</td>';
                    echo '<td>';
                    echo '<div class="dropdown">';
                    echo '<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button>';
                    echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                    echo '<a href="/update/' . $produto['id'] . '" class="dropdown-item edit" data-toggle="modal" data-target="#modaledit' . $produto['id'] . '">Editar <i class="fa-solid fa-pen-to-square"></i></a>';
                    echo '<a href="/delete/' . $produto['id'] . '" class="dropdown-item delete" onclick="return confirm(\'Você tem certeza que deseja deletar? registros serão perdidos!\')">Deletar <i class="fa-solid fa-trash"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal de Inserção -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Adicionar Tipo de Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_product.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
