<?php
require("conectar.php");
$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$ano = $_GET["ano"];
$setor = $_GET["setor"];
$ok = conecta_bd() or die ("Erro");
mysqli_query($ok, "INSERT INTO candidatoRicardo (NomeCandidato, EnderecoCandidato, AnoCurso, SetorPretendido) VALUES ('$nome', '$endereco', '$ano', '$setor')") or die ("Erro ao inserir");
?>
<a href="index.php">Voltar