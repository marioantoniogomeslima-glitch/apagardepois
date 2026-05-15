<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Categorias</title>

<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="dashboard-container">

<?php include 'menu.php'; ?>

<main>

<div class="header-content">

<h2>Gestão de Categorias</h2>

<p>
Visualize e gerencie as categorias do sistema.
</p>

</div>


<div style="text-align: right; margin-bottom: 15px;">

<a href="cad-categorias.php" class="btn-novo">

<i class="fa-solid fa-plus"></i>
Cadastrar nova categoria

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

<tbody id="lista-categorias">

</tbody>

</table>

</div>

</main>
</div>

<?php include 'footer.php'; ?>


<script>

function carregarCategorias() {

    const tbody = document.getElementById('lista-categorias');

    let lista = JSON.parse(localStorage.getItem('bancoCategorias')) || [];

    tbody.innerHTML = '';

    lista.forEach(function(categoria, index) {

        tbody.innerHTML += `

        <tr>

            <td>${index + 1}</td>

            <td>${categoria.nome}</td>

            <td>

                <span class="badge ${categoria.status}">
                    ${categoria.status}
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

    let lista = JSON.parse(localStorage.getItem('bancoCategorias'));

    let novoNome = prompt('Digite o novo nome da categoria:');

    let novoStatus = prompt('Digite ativo ou inativo:');

    lista[index].nome = novoNome;

    lista[index].status = novoStatus;

    localStorage.setItem('bancoCategorias', JSON.stringify(lista));

    carregarCategorias();

}


function deletar(index) {

    if(confirm('Tem certeza que deseja apagar?')) {

        let lista = JSON.parse(localStorage.getItem('bancoCategorias'));

        lista.splice(index, 1);

        localStorage.setItem('bancoCategorias', JSON.stringify(lista));

        carregarCategorias();

    }

}

carregarCategorias();

</script>

</body>
</html>