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
<h2><i class="fa-solid fa-file-lines"></i> Nova Postagem</h2>
<p>Preencha os dados para criar uma postagem.</p>
</div>

<form action="processa_postagem.php" method="POST">

<div class="form-group">
<label>Título</label>
<input type="text" name="titulo" required>
</div>

<div class="form-group">
<label>Conteúdo</label>
<textarea name="conteudo" rows="5" required></textarea>
</div>

<div class="form-group">
<label>Categoria</label>
<select name="categoria">
<option>Tecnologia</option>
<option>Educação</option>
<option>Esportes</option>
</select>
</div>

<div class="form-group">
<label>Status</label>
<select name="status">
<option value="ativo">Ativo</option>
<option value="inativo">Inativo</option>
</select>
</div>

<div class="form-actions">

<button type="submit" class="btn-save">
<i class="fa-solid fa-floppy-disk"></i> Publicar
</button>

<a href="postagens.php" class="btn-cancel">Cancelar</a>

</div>

</form>
</section>

</main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>