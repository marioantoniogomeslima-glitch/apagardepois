<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Usuário</title>

<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="dashboard-container">

<?php include 'menu.php'; ?>

<main>

<section class="card-form">

<div class="form-header">

<h2>
<i class="fa-solid fa-user-plus"></i>
Novo Usuário
</h2>

<p>
Preencha os dados abaixo para registrar um novo acesso.
</p>

</div>

<form>

<div class="form-group">

<label for="nome">Nome Completo</label>

<input type="text"
id="nome"
name="nome"
placeholder="Ex: Nome Completo"
required>

</div>

<div class="form-group">

<label for="email">E-mail</label>

<input type="email"
id="email"
name="email"
placeholder="nome@empresa.com"
required>

</div>

<div class="form-row">

<div class="form-group flex-1">

<label for="senha">Senha</label>

<input type="password"
id="senha"
name="senha"
required>

</div>

<div class="form-group flex-1">

<label for="nivel">Nível</label>

<select id="nivel" name="nivel">

<option value="Usuário">Usuário</option>
<option value="Administrador">Administrador</option>

</select>

</div>

</div>

<div class="form-actions">

<button type="button"
id="btn-usuario"
class="btn-save">

<i class="fa-solid fa-floppy-disk"></i>
Finalizar Cadastro

</button>

<a href="usuarios.php" class="btn-cancel">
Cancelar
</a>

</div>

</form>

</section>

</main>

</div>

<?php include 'footer.php'; ?>


<script>

const btnUsuario = document.getElementById('btn-usuario');

btnUsuario.addEventListener('click', function() {

    const nome = document.getElementById('nome').value;

    const email = document.getElementById('email').value;

    const senha = document.getElementById('senha').value;

    const nivel = document.getElementById('nivel').value;

    const novoUsuario = {

        nome: nome,
        email: email,
        senha: senha,
        nivel: nivel,
        status: 'ativo'

    };

    let lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];

    lista.push(novoUsuario);

    localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

    alert('Usuário cadastrado com sucesso!');

    document.getElementById('nome').value = '';
    document.getElementById('email').value = '';
    document.getElementById('senha').value = '';

});

</script>

</body>
</html>