<?php
    switch(@$_REQUEST["acao"])
    {
        case 'cadastrar':
            $login_user = $_POST["login-user"];
            $password_user = $_POST["password-user"];

            $sql = "INSERT INTO usuario (login,password) VALUE ('{$login_user}',{$password_user})";

            $res = $conn->query($sql);

            if($res==true)
            {
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=a';</script>";
            }
            else
            {
                print"<script>alert('Erro ao cadastrar');</script>";
                print"<script>location.href='?page=a';</script>";
            }

        break;

        case 'consulta':
            $login_user = $_POST["login-user"];
            $password_user = $_POST["password-user"];

            $sql = "SELECT * FROM usuario";

            $res = $conn->query($sql);

            $qtd = $res -> num_rows;

            if($qtd > 0)
            {
                while($row = $res->fetch_object())
                {
                    if($row->login == $login_user && $row->password == $password_user)
                        print "Usuario Encontrado";
                    else
                        print "Usuario Não Encontrado";
                }
            }
        break;

        case 'editar':
            $id_user = $_POST["id-user"];
            $login_user = $_POST["login-user"];
            $password_user = $_POST["password-user"];

            $sql = "UPDATE usuario SET login='{$login_user}', password={$password_user} WHERE id='{$id_user}'";

            $res = $conn->query($sql);

            if($res==true)
            {
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=a';</script>";
            }
            else
            {
                print"<script>alert('Erro ao Editar');</script>";
                print"<script>location.href='?page=a';</script>";
            }
        break;
        
        case 'excluir':
            
        break;
    }