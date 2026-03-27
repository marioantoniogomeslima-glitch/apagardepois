<style>
.ativo{
color:blue;
    }
.inativo{
color:red;
}
</style>
<?php

$nivelAcesso = 2;

if ($nivelAcesso == 2) {
    echo '<span class="badge ativo">Administrador</span>';
} else {
    echo '<span class="badge inativo">Usuário Comum</span>';
}

?>