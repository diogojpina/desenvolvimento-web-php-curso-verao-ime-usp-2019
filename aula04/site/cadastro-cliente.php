<?php
print_r($_POST);

$erros = array();
$sucessos = array();


$nome = '';
$sexo = '';
$email = '';
$senha = '';
$senhaConfirmacao = '';

if (count($_POST) > 0) {
	if ($_POST['nome'] != '') {
		$nome = trim($_POST['nome']);
		$nome = strtolower($nome);
		$nome = ucwords($nome);

		if ($nome == '') {
			$erros[] = 'Digite o nome!';
		}
	}


	if (isset($_POST['sexo'])) {
		$sexo = $_POST['sexo'];
	}
	else {
		$erros[] = 'Escolha o sexo!';
	}

	$email = $_POST['email'];
	if ($email == '') {
		$erros[] = 'Digite o e-mail!';
	}

	$senha = $_POST['senha'];
	if (strlen($senha) < 6) {
		$erros[] = "Sua senha deve ter pelo menos 6 caracteres!";
	}

	$senhaConfirmacao = $_POST['senhaConfirmacao'];
	if ($senha != $senhaConfirmacao) {
		$erros[] = "A senha e a confirmação devem ser iguais!";
	}

	if (count($erros) == 0) {
		$senhaCripto = md5($senha);
		$strsql = "INSERT INTO clientes (nome, sexo, email, senha) VALUES ('$nome', '$sexo', '$email', '$senhaCripto')";

		echo $strsql;

		$sucessos[] = 'Cliente cadastrado com sucesso!';
		//header('Location: login.php');
	}


	echo $nome . '<br />';
	echo $sexo . '<br />';
}





?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
</head>
<body>

<h1>Cadastro de Cliente</h1>

<?php 
if (count($erros) > 0) {
	foreach ($erros as $erro) {
		echo "<h3>$erro</h3>";
	}
}

if (count($sucessos) > 0) {
	foreach ($sucessos as $sucesso) {
		echo "<h3>$sucesso</h3>";
	}
}
?>

<form method="post">
Nome: 
<input type="text" name="nome" value="<?php echo $nome; ?>">
<br />
Sexo: 
<input type="radio" name="sexo" value="M" <?php if ($sexo == 'M') { echo 'checked="checked"'; } ?>> Masculino
<input type="radio" name="sexo" value="F" <?php if ($sexo == 'F') { echo 'checked="checked"'; } ?>> Feminino
<br />
E-mail:
<input type="text" name="email" value="<?php echo $email; ?>">
<br />
Senha:
<input type="password" name="senha" value="<?php echo $senha; ?>">
Confirmação de Senha:
<input type="password" name="senhaConfirmacao" value="<?php echo $senhaConfirmacao; ?>">

<br />
<input type="submit" value="Salvar">
</form>

</body>
</html>