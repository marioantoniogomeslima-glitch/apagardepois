<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Cadastro de Categoria</title>
<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">

<?php include 'menu.php'; ?>

<main>

<section class="card-form">

<div class="form-header">
<h2><i class="fa-solid fa-tags"></i> Nova Categoria</h2>
<p>Preencha os dados para cadastrar uma categoria.</p>
</div>

<form action="processa_categoria.php" method="POST">

<div class="form-group">
<label>Nome da Categoria</label>
<input type="text" name="nome" required>
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
<i class="fa-solid fa-floppy-disk"></i> Salvar
</button>

<a href="categorias.php" class="btn-cancel">Cancelar</a>
</div>

</form>
</section>

</main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>