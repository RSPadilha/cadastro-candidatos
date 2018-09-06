<!DOCTYPE html>
<!-- Mostrar dados candidato, substituindo codigo pelo nome do setor OK
Inserir novo candidato OK
Pesquisar candidatos  incritos em setor especifico(atraves do nomesetor) e pelo ano concurso
Mudar nome da tabela, incluir meu nome OK
Exportar sql OK -->
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Vagas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require("conectar.php");
$ok = conecta_bd() or die("Não foi possivel conectar");
$candidatos = mysqli_query($ok, "Select * from candidatoRicardo, setorricardo where setorricardo.CodigoSetor = candidatoRicardo.SetorPretendido;");
// $candidatos = mysqli_query($ok, "Select * from candidatoricardo;");
?>
<table border="1">
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Endereco</th>
		<th>Ano Concurso</th>
		<th>Setor</th>
	</tr>
	<?php
	while ($linhha = mysqli_fetch_array($candidatos)) {
		$cod = $linhha["CodigoCandidato"];
		$nome = $linhha["NomeCandidato"];
		$endereco = $linhha["EnderecoCandidato"];
		$ano = $linhha["AnoCurso"];
		$setor = $linhha["NomeSetor"];
	print("<tr>
		<td>$cod</td>
		<td>$nome</td>
		<td>$endereco</td>
		<td>$ano</td>
		<td>$setor</td>
	</tr>");
	}
	?>
</table>		
	<!-- inserção -->
	<form action="inserir.php" method="GET">
		Cadastro
		<input type="text" name="nome" placeholder="Nome" required>
		<input type="text" name="endereco" placeholder="Endereço" required>
		<input type="number" name="ano" placeholder="Ano Concurso" required>
		<select name="setor" required>
			<option value="" hidden>Setor</option>
			<option value="1">Compras</option>
			<option value="2">Vendas</option>
			<option value="3">Almoxarifado</option>
			<option value="4">Contabilidade</option>
			<option value="5">Limpeza</option>
			<option value="6">Informatica</option>
		</select>
		<input type="submit" name="" value="Inserir Novo">
	</form>
	<!-- Pesquisar candidatos incritos em setor especifico(atraves do nomesetor) e pelo ano concurso -->
	<div id="pesquisa">
	Pesquisa Específica
	<form action="pesquisa.php">
	<select name="setorPesquisa">
			<option value="" hidden>Setor</option>
			<option value="1">Compras</option>
			<option value="2">Vendas</option>
			<option value="3">Almoxarifado</option>
			<option value="4">Contabilidade</option>
			<option value="5">Limpeza</option>
			<option value="6">Informatica</option>
		</select>
		-OU-
		<input type="number" name="anoPesquisa" placeholder="Ano do Concurso">
		<input type="submit" name="" value="Pesquisar">
	</form>
</div>
</body>
</html>