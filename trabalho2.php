<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="dash.css" rel="stylesheet">
</head>

<body>

<div class="dashboard-container">

    <!-- Menu lateral -->
    <?php include 'menu.php'; ?>


   
    <main>

        <section class="container-cards">

            <article>
                <h2>Módulo de Usuários</h2>
                <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                <a href="usuarios.php" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Relatórios de Vendas</h2>
                <p>Acompanhe os gráficos de desempenho deste mês.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Configurações do Servidor</h2>
                <p>Ajuste as portas do Apache e o banco de dados.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

        </section>

    </main>

</div>


<?php include 'footer.php'; ?>



<script>

// pergunta ao usuario e guarda a resposta na variavel
let resposta = prompt ("Quantas categorias voce gostaria de cadastrar ?");

//converte o texto que o usuario digitou para um numero real 
let quantidade = Number(resposta);

//cria um laço de repetição que roda a quantidade de vezes informada

for (let i=1; i <= quantidade; i++){

let nomeCategoria = prompt("Digite o nome da categoria " + i + ":");


if (nomeCategoria == ""){
console.log("❌ Erro: O nome da categoria não pode ser vazio!");

}else {
    console.log("✅ Categoria " + nomeCategoria + " cadastrada com sucesso!");
}

//mostra o processo apenas no F12  (CONSOLE)
console.log("processando os dados do usuario " + i + "...");



}

// mostrar um aviso final na tela do usuario 
alert("Pronto! Aperte F12 para ver o relatorio completo no Console");


</script>
</body>


</html>