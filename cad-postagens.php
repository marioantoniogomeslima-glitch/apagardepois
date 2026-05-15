<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Postagem</title>

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
<i class="fa-solid fa-file-lines"></i>
Nova Postagem
</h2>

<p>
Preencha os dados para criar uma postagem.
</p>

</div>

<form>

<div class="form-group">

<label>Título</label>

<input type="text"
id="titulo-postagem"
required>

</div>

<div class="form-group">

<label>Conteúdo</label>

<textarea id="conteudo-postagem"
rows="5"
required></textarea>

</div>

<div class="form-group">

<label>Categoria</label>

<select id="categoria-postagem">

<option>Tecnologia</option>
<option>Educação</option>
<option>Esportes</option>

</select>

</div>

<div class="form-group">

<label>Status</label>

<select id="status-postagem">

<option value="ativo">Ativo</option>
<option value="inativo">Inativo</option>

</select>

</div>

<div class="form-actions">

<button type="button"
id="btn-postagem"
class="btn-save">

<i class="fa-solid fa-floppy-disk"></i>
Publicar

</button>

<a href="postagens.php" class="btn-cancel">
Cancelar
</a>

</div>

</form>

</section>

</main>
</div>

<?php include 'footer.php'; ?>


<script>

const btnPostagem = document.getElementById('btn-postagem');

btnPostagem.addEventListener('click', function() {

    const titulo = document.getElementById('titulo-postagem').value;

    const conteudo = document.getElementById('conteudo-postagem').value;

    const categoria = document.getElementById('categoria-postagem').value;

    const status = document.getElementById('status-postagem').value;

    const novaPostagem = {

        titulo: titulo,
        conteudo: conteudo,
        categoria: categoria,
        status: status

    };

    let lista = JSON.parse(localStorage.getItem('bancoPostagens')) || [];

    lista.push(novaPostagem);

    localStorage.setItem('bancoPostagens', JSON.stringify(lista));

    alert('Postagem cadastrada com sucesso!');

    document.getElementById('titulo-postagem').value = '';

    document.getElementById('conteudo-postagem').value = '';

});

</script>

</body>
</html>