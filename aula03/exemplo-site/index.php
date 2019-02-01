<!DOCTYPE html>
<html>
<head>
	<title>Meu Primeiro Site!</title>
</head>
<body>
<h1>Título da Página</h1>
<h2>Sub-Título da Página</h2>

<p>Meu texto vai <b><i>aqui</i></b>.</p>

<a href="http://www.google.com" target="_blank">Site do Google</a>

<br />

<img src="images/borboleta.png" width="80" height="50">

<hr />

<?php
if (isset($_GET['success'])) {
	if ($_GET['success'] == 'true') {
		echo 'Formulário salvo com sucesso!';
	}
	else {
		echo "Formulário foi preenchido errado!";
	}
}
?>

<form method="post" action="salvar-formulario.php">
	Nome: <input type="text" name="nome" placeholder="Nome Completo"> <br />
	Sexo: <input type="radio" name="sexo" value="F" checked="checked"> Feminino
	<input type="radio" name="sexo" value="M"> Masculino 
	<input type="radio" name="sexo" value="O"> Outros 
	<br />
	Onde Encontrou?: 
	<input type="checkbox" name="onde[]" value="Google" checked="checked">Google 
	<input type="checkbox" name="onde[]" value="Revista">Revista
	<br />
	Estado Civil:
	<select>
		<option value=""></option>
		<option value="solteiro">Solteiro</option>
		<option value="casado">Casado</option>
	</select>
	<br />
	Descrição:
	<textarea name="descricao"></textarea>
	<br />
	Senha:
	<input type="password" name="senha">
	<br />
	<input type="submit" value="Enviar">
</form>


<ul>
	<li>Primeiro Elemento</li>
	<li>Segundo Elemento</li>
</ul>

<ol>
	<li>Primeiro Elemento</li>
	<li>Segundo Elemento</li>
</ol>

<ul style="list-style: none;">
	<li style="display: inline;">Primeiro Elemento</li>
	<li style="display: inline;">Segundo Elemento</li>
</ul>

<div>
	Teste
</div>

<table border="1">
	<thead>
		<tr>
			<th>Primeira Coluna</th>
			<th>Segunda Coluna</th>
			<th>Terceira Coluna</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>Linha 1 - Coluna 1</td>
		<td>Linha 1 - Coluna 2</td>
	</tr>
	<tr>
		<td>Linha 2 - Coluna 1</td>
		<td colspan="2">Linha 2 - Coluna 2</td>
	</tr>
	<tr>
		<td>Linha 3 - Coluna 1</td>
		<td>Linha 3 - Coluna 2</td>
		<td>Linha 3 - Coluna 3</td>
	</tr>
	</tbody>
</table>



</body>
</html>