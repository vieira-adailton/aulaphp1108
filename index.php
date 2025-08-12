<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_cadastro.php" method="post"> <!-- Pega o formulário e encaminha para o servidor-->
        <pre>
        <label for="">Nome: </label>
        <input type="text" name="nome"> <!-- A propriedade name virará variáveis php-->
        <label type="email"for="">E-mail</label>
        <input type="text" name="email" id="">
        <label for="">Telefone</label>
        <input type="text" name="telefone" id="">
        <input type="submit" value="Enviar"> <!-- Cria botão-->
        <input type="reset" value="Limpar">  <!-- Cria botão-->
        <button type="submit">Enviar</button> <!-- Cria botão-->
        <button type="reset">Limpar</button> <!-- Cria botão-->
    </form>
</body>
</html>

<!--
O metodo get = nos retorna a URL de um produto
O metodo post = nos retorna uma 
-->