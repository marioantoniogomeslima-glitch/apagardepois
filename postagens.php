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

<p>
Gerencie suas Postagens.
</p>

</div>


<div style="text-align: right; margin-bottom: 15px;">

<a href="cad-postagens.php" class="btn-novo">

<i class="fa-solid fa-plus"></i>
Nova Postagem

</a>

</div>


<div class="table-responsive">

<table>

<thead>

<tr>

<th>ID</th>
<th>Título</th>
<th>Conteúdo</th>
<th>Categoria</th>
<th>Status</th>
<th>Ações</th>

</tr>

</thead>

<tbody id="lista-postagens">

</tbody>

</table>

</div>

</main>

</div>

<?php include 'footer.php'; ?>


<script>

function carregarPostagens() {

    const tbody = document.getElementById('lista-postagens');

    let lista = JSON.parse(localStorage.getItem('bancoPostagens')) || [];

    tbody.innerHTML = '';

    lista.forEach(function(postagem, index) {

        tbody.innerHTML += `

        <tr>

            <td>${index + 1}</td>

            <td>${postagem.titulo}</td>

            <td>${postagem.conteudo}</td>

            <td>${postagem.categoria}</td>

            <td>

                <span class="badge ${postagem.status}">
                    ${postagem.status}
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

    let lista = JSON.parse(localStorage.getItem('bancoPostagens'));

    let novoTitulo = prompt('Digite o novo título:');

    let novoConteudo = prompt('Digite o novo conteúdo:');

    lista[index].titulo = novoTitulo;

    lista[index].conteudo = novoConteudo;

    localStorage.setItem('bancoPostagens', JSON.stringify(lista));

    carregarPostagens();

}


function deletar(index) {

    if(confirm('Tem certeza que deseja apagar?')) {

        let lista = JSON.parse(localStorage.getItem('bancoPostagens'));

        lista.splice(index, 1);

        localStorage.setItem('bancoPostagens', JSON.stringify(lista));

        carregarPostagens();

    }

}

carregarPostagens();

</script>

</body>
</html>