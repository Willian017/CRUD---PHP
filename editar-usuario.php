<h1 class="h1-form">Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id-user" value="<?php print $row->id; ?>">
        <label for="login-user">Login</label>
        <input type="text" name="login-user" value="<?php print $row->login; ?>">
        <label for="password-user">Password</label>
        <input type="password" name="password-user" value="<?php print $row->password; ?>">
        <input type="submit">
</form>