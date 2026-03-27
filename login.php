<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="login-container">
    <div class="login-card">

        <div class="login-header">
            <i class="fa-solid fa-right-to-bracket logo-icon"></i>
            <h2>Painel do blog</h2>
            <?php if (isset($_GET['erro'])): ?>
    <p class="error-alert">Usuario ou senha incorretos !</p>
    <?php endif; ?>

        </div>

        <form action="valida_login.php" method="POST">

            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="form-group">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn-login">Acessar painel</button>

        </form>

    </div>
</div>

</body>
</html>