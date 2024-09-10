<h1 class="h1-form">Listar Usuarios</h1>
<?php
    include("salvar-usuario.php");

    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res -> num_rows;

    if($qtd>0)
    {
       print "<table>";
       print "<tr>";
        print "<th style='border-radius: 10px 0px 0px 0px;'>Nome</th>";
        print "<th  style='border-radius: 0px 10px 0px 0px;'>Ações</th>";
       print "</tr>";
        while($row = $res->fetch_object())
        {
            print "<tr>";
            print "<td>" . $row->login . "</td>";
            print "<td id='botoes'> 
            <button id='botao-editar' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
            <button id='botao-excluir' onclick=\"location.href='?page=excluir&id=".$row->id."';\">Excluir</button>
            </td>";//onclick=include('salvar-usuario.php')&&
            print "</tr>";
        }
        print "</table>";
    }
    else
        print"<p> Não encontrou resultados </p>";
?>