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

           
<div style= margin-bottom: 15px;>
    
    <input type="password" id="senha-login" name="senha" placeholder="Digite sua senha" required>
    <span id="icone-olho" style="cursor: pointer; margin-left: -30px;">👁️</span>

</div>
            <button type="submit" class="btn-login">Acessar painel</button>

        </form>

    </div>
</div>



<script>

//construa elementos do html 
let inputSenha = document.getElementById("senha-login");
let iconeOlho = document.getElementById("icone-olho");
//adiciona um evento de clique no icone do olho
iconeOlho.addEventListener("click", function() {
    //verifica se o tipo do input é password
    if (inputSenha.type === "password") {
        //se for, muda para text para mostrar a senha
        inputSenha.type = "text";
        //muda o icone para um olho aberto
        iconeOlho.textContent = "🙈";
    } else {
        //se não for, volta para password para esconder a senha
        inputSenha.type = "password";
        //muda o icone para um olho fechado
        iconeOlho.textContent = "👁️";
    }
});


</script>
</body>
</html>