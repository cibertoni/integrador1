<?php
    include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Café Blend - Login</title>
</head>
<body>
    <main>
        <div>
        <!-- adicionar borda no css -->
            <form action="">
                <input type="email">
                <label for="email">E-mail</label>
                <br>
                <input type="password">
                <label for="password">Senha</label>
            </form>
        </div>
        <div>
        <!-- aplicar float/overflow no css -->
            <p>Não é usuário? Faça seu cadastro <a href="cadastro.php">aqui</a>.</p>
        </div>
    </main>
</body>
</html>

<?php
    include_once('footer.php');
?>