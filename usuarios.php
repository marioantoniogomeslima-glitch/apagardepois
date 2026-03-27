<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Gestão de Usuários</title>
<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">

<!-- Menu lateral -->
<?php include 'menu.php'; ?>
<!-- Conteúdo principal -->
<main>

<div class="header-content"> 
<h2>Gestão de usuários</h2>
<p>Visualize e gerencia as permissões dos usuários do sistema.</p>
</div>

</a>
<div style="text-align: right; margin-bottom: 15px;">
<a href="cad-usuarios.php" class="btn-novo">
<i class="fa-solid fa-plus"></i> Cadastrar novo usurario
</a>
</div>

</a>

<div class="table-responsive">
<table>

<thead>
<tr>

<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>Acesso</th>
<th>Status</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<tr>
<td>01</td>
<td>Eric Freitas</td>
<td>eric@unifev.edu.br</td>
<td>Administrador</td>
<td><span class="badge ativo">Ativo</span></td>

<td>

<button class="btn-icon">
<i class="fa-solid fa-eye"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-pen"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-trash"></i>
</button>

</td>
</tr>

<tr>
<td>02</td>
<td>Ana Souza</td>
<td>ana.souza@email.com</td>
<td>Editor</td>
<td><span class="badge ativo">Ativo</span></td>

<td>

<button class="btn-icon">
<i class="fa-solid fa-eye"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-pen"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-trash"></i>
</button>

</td>


</tr>
<tr>
<td>03</td>
<td>Carlos Lima</td>
<td>carlos.lima@gmail.com</td>
<td>Usuário</td>
<td><span class="badge inativo">inativo</span></td>
<td>

<button class="btn-icon">
<i class="fa-solid fa-eye"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-pen"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-trash"></i>
</button>

</td>
</tr>

</tbody>
</table>
</div>

</main>

</div>

<!-- Rodapé -->
<?php include 'footer.php'; ?>
</body>
</html>