<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Gestão de Postagens</title>
<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">


<?php include 'menu.php'; ?>


<main>

<div class="header-content"> 
<h2>Gestão de Postagens</h2>
<p>Gerencie suas Postagens.</p>
</div>


<div style="text-align: right; margin-bottom: 15px;">
<a href="cad-postagens.php" class="btn-novo">
<i class="fa-solid fa-plus"></i> Nova Postagem
</a>
</div>

<div class="table-responsive">
<table>

<thead>
    <tr>
    <th>ID</th>
    <th>titulo</th>
    <th>conteudo</th>
    <th>categoria</th>
    <th>status</th>
    <th>Ações</th>
    </tr>
    </thead>

<tbody>

<tr>
<td>01</td>
<td></td>
<td></td>
<td></td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>02</td>
<td></td>
<td></td>
<td></td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>03</td>
<td></td> 
<td></td>
<td></td>
<td><span class="badge inativo">inativo</span></td>
<td>
<button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
<button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>



<tr>
<td>04</td>
<td></td> 
<td></td>
<td></td>
<td><span class="badge inativo">inativo</span></td>
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