<?php

$nota1 = $_GET['nota1'] ?? 0;
$nota2 = $_GET['nota2'] ?? 0;
$nota3 = $_GET['nota3'] ?? 0;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Média: " . $media;

?>