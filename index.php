<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<style>
	body{
		background-image: url("fundo.jpg");
		box-shadow: inset;
		text-align: center;
		color: white;
       
	}
</style>

<body>
	<?php
	if(!isset($_SESSION['login'])){

		if(isset($_POST['acao']) ){
			$login = 'Magno Werbett';
			$senha = '1234567';


			$loginForm = $_POST['login'];
			$senhaForm = $_POST['senha'];

			if($login == $loginForm && $senha == $senhaForm){
				//logado com sucesso!
				$_SESSION['login'] = $login;
				header('Location: index.php');
			}else{
				//algum erro ocorreu!
				echo 'Dados Incorretos!';
			}


		}
		include('login.php');
	}else{
		if(isset($_GET['logout'])){
			unset($_SESSION['login']);
			session_destroy();
			header('Location: index.php');
		}
		include('home.php');
	}
	?>

</body>
</html>