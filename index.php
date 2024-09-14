<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body id="body-index">

    <nav>
        <a href="?page=novo">Novo Usuario</a>
        <a href="?page=listar">Listar Usuario</a>
        <a href="?page=consulta">Consulta Usuario</a>
        </nav>

    <div class="container">
        <?php
            include("conexao.php");

            switch(@$_REQUEST["page"])
            {
                case "novo":
                    include("novo-usuario.php");
                break;

                case "listar":
                    include("lista-usuario.php");
                break;

                case "excluir":
                    $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

                    $res = $conn->query($sql);

                    if($res==true)
                    {
                        print"<script>location.href='?page=listar';</script>";
                    }
                    else
                    {
                        print"<script>location.href='?page=listar';</script>";
                    }
                break;

                case "editar":
                    include("editar-usuario.php");
                break;

                case "consulta":
                    include("consulta-usuario.php");
                break;

                case "salvar":
                    include("salvar-usuario.php");
                break;

                default:
                    print "<h1>Plataforma de Gerenciamento de Clientes</h1>";
            }
        ?>
    </div>

</body>
</html>