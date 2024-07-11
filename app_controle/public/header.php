<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Low Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--link rel="stylesheet" href="../static/estilo.css"-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .navbar-custom {
            background-color: #333; /* Cor de fundo da navbar */
        }
        .navbar-custom .nav-link {
            color: #fff; /* Cor dos links da navbar */
        }
        .navbar-custom .nav-link:hover {
            color: #ccc; /* Cor dos links da navbar ao passar o mouse */
        }
        .dropdown-menu {
            background-color: #333; /* Cor de fundo do dropdown */
            color: #fff; /* Cor dos itens do dropdown */
        }
        .dropdown-item {
            color: #fff; /* Cor dos links do dropdown */
        }
        .dropdown-item:hover {
            background-color: #444; /* Cor de fundo do item do dropdown ao passar o mouse */
            color: #fff; /* Cor do item do dropdown ao passar o mouse */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/index.php">Tipo de Produto</a>
                        <a class="dropdown-item" href="/outra_opcao.php">Tamanho</a>
                        <a class="dropdown-item" href="/outra_opcao.php">Cor</a>
                        <a class="dropdown-item" href="/outra_opcao.php">Cliente</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/atendimento.php">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fechado.php">Vendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="return false;">Compras</a>
                </li>
            </ul>
            <div class="d-flex justify-content-end ml-auto">
                <a style="margin-right: 20px; padding: .5rem 1rem;" href="/logout.php" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
    <script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
    </script>
</body>
</html>
