<h1 class="h1-form">Novo Usuario</h1>
<form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <label for="login-user">Login</label>
        <input type="text" name="login-user" required>
        <label for="password-user">Password</label>
        <input type="password" name="password-user" required>
        <input type="submit">
</form>