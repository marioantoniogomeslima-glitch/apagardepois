<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Gestão de Categorias</title>
<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">


<?php include 'menu.php'; ?>


<main>

<div class="header-content"> 
<h2>Gestão de Categorias</h2>
<p>Gerencie as categorias.</p>
</div>


<div style="text-align: right; margin-bottom: 15px;">
<a href="cad-categorias.php" class="btn-novo">
<i class="fa-solid fa-plus"></i> Nova categoria
</a>
</div>

<div class="table-responsive">
<table>

<thead>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Status</th>
    <th>Ações</th>
    </tr>
    </thead>

<tbody>

<tr>
<td>01</td>
<td>Tecnologia</td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>02</td>
<td>Educacao</td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>03</td>
<td>Esportes</td> 
<td><span class="badge ativo">ativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

</tbody>

</table>
</div>

</main>

</div>


<?php include 'footer.php'; ?>

</body>
</html>