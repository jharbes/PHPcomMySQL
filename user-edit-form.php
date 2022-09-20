<h2>Alteração de dados do usuário</h2>
<form action="user-edit.php" method="post">
    <table>
        <tr><td><label for="usuario">Usuário: </label></td><td><input type="text" name="usuario" id="usuario" maxlength="10" size="10" required></td></tr>
        <tr><td><label for="nome">Nome: </label></td><td><input type="text" name="nome" id="nome" maxlength="30" size="30" required></td></tr>
        <tr><td><label for="tipo">Tipo: </label></td><td><input type="text" name="tipo" id="tipo" readonly></td></tr>
        <tr><td><label for="senha1">Senha: </label></td><td><input type="password" name="senha1" id="senha1" maxlength="10" size="10" required></td></tr>
        <tr><td><label for="senha2">Senha: </label></td><td><input type="password" name="senha2" id="senha2" maxlength="10" size="10" required></td></tr>
    </table>
    <div id="entrar"><input type="submit" value="Salvar Alterações" id="botao-entrar"></div>
</form>