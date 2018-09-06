<?php
require("conectar.php");
$ok = conecta_bd() or die("Não foi possivel conectar");

$setor = $_GET["setorPesquisa"];
$ano = $_GET["anoPesquisa"];
if($setor == "" && $ano == "") {
	print("Selecione pelo menos uma opcao");
} else if($setor != "" && $ano != "") {
$setorConsulta = mysqli_query($ok, "Select NomeCandidato from candidatoRicardo where SetorPretendido = $setor and AnoCurso = $ano;");
while ($linha = mysqli_fetch_array($setorConsulta)) {
	print($linha["NomeCandidato"]);
	print("<br>");
}

} else if($setor != "") {
$setorConsulta = mysqli_query($ok, "Select NomeCandidato from candidatoRicardo where SetorPretendido = $setor;");
while ($linha = mysqli_fetch_array($setorConsulta)) {
	print($linha["NomeCandidato"]);
	print("<br>");
}
}else if ($ano != "") {
$setorConsulta = mysqli_query($ok, "Select NomeCandidato from candidatoRicardo where AnoCurso = $ano;");
while ($linha = mysqli_fetch_array($setorConsulta)) {
	print($linha["NomeCandidato"]);
	print("<br>");
}
}
?>
<a href="index.php">Voltar