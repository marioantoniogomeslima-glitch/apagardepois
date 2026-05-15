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

<?php include 'menu.php'; ?>

<main>

<div class="header-content">

<h2>Gestão de usuários</h2>

<p>
Visualize e gerencia as permissões dos usuários do sistema.
</p>

</div>


<div style="text-align: right; margin-bottom: 15px;">

<a href="cad-usuarios.php" class="btn-novo">

<i class="fa-solid fa-plus"></i>
Cadastrar novo usuário

</a>

</div>


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

<tbody id="lista-usuarios">

</tbody>

</table>

</div>

</main>

</div>

<?php include 'footer.php'; ?>


<script>

function carregarUsuarios() {

    const tbody = document.getElementById('lista-usuarios');

    let lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];

    tbody.innerHTML = '';

    lista.forEach(function(usuario, index) {

        tbody.innerHTML += `

        <tr>

            <td>${index + 1}</td>

            <td>${usuario.nome}</td>

            <td>${usuario.email}</td>

            <td>${usuario.nivel}</td>

            <td>

                <span class="badge ${usuario.status}">
                    ${usuario.status}
                </span>

            </td>

            <td>

                <button class="btn-icon" onclick="editar(${index})">

                    <i class="fa-solid fa-pen"></i>

                </button>

                <button class="btn-icon" onclick="deletar(${index})">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </td>

        </tr>

        `;
    });

}


function editar(index) {

    let lista = JSON.parse(localStorage.getItem('bancoUsuarios'));

    let novoNome = prompt('Digite o novo nome:');

    let novoEmail = prompt('Digite o novo email:');

    lista[index].nome = novoNome;

    lista[index].email = novoEmail;

    localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

    carregarUsuarios();

}


function deletar(index) {

    if(confirm('Tem certeza que deseja apagar?')) {

        let lista = JSON.parse(localStorage.getItem('bancoUsuarios'));

        lista.splice(index, 1);

        localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

        carregarUsuarios();

    }

}

carregarUsuarios();

</script>

</body>
</html>