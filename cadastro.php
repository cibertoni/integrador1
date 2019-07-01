<?php
    include_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Café Blend - Cadastro</title>
</head>
<body>

    <main>
        <div>
            <p>Já tem conta? Faça login <a href="login.php">aqui</a>.</p>
        </div>
        <div>
            <form action="">
                <input type="text">
                <label for="nome">Nome Completo</label>
                <br>
                <input type="email">
                <label for="email">E-mail</label>
                <br>
                <input type="password">
                <label for="password">Senha</label>
                <br>
                <!-- confirmar senha? -->
                <input type="text">
                <label for="address">Endereço</label>
                <br>
                <input type="text">
                <label for="cep">CEP</label>
                <br>
            </form>
        </div>
    </main>

</body>
</html>

<?php
        include_once('footer.php');
?>