<?php
$PlayerXml = simplexml_load_file(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'xml'.DIRECTORY_SEPARATOR.'player.xml');
$erreur = "";

if (!empty($_POST['PSEUDO'])) {
    if (player_conect($_POST['PSEUDO'])) {
        header('Location: /Acceuil-Tournois.php');
    } else {
        $erreur .= 'utilisateur inconnue \n';
    }
}

?>

<!-- PAGE_Connexion 29/02/2020 15:21 WEBDEV 23 23.0.127.0 -->
<html class="htmlstd html5" lang="fr" style="overflow-x: visible;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Connexion</title><meta name="generator" content="WEBDEV">
		<meta name="viewport" content="width=device-width">
		<meta name="Description" lang="fr" content="Page de connexion au tournois Tiplay Mq">
		<meta name="keywords" lang="fr" content="Connexion Tiplay,Tiplay,Tournois E-Gaming Martinique,Martinque,Tournois Jeux vidéos">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.6">
		<title>Signin Template · Bootstrap</title>

		<link href="./res/css/bootstrap_4_4.css" rel="canonical">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="./res/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


		<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			font-size: 3.5rem;
			}
		}
		</style>
		<!-- Custom styles for this template -->
		<link href="./res/css/signin.css" rel="stylesheet">
	</head>
  <body class="text-center">
    <form class="form-signin" method="POST">
		<img width="72" height="72" class="mb-4" alt="" src="./res/img/partie/noPicture.jpg">
		<h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
		<?php
            if ($erreur <> '') {?>
				<div style="color: white; text-decoration: double; text-align: center; margin: 0.3em"><?= $erreur ?></div> 
			<?php
            }
            ?>
		<label class="sr-only" for="inputEmail">Pseuo</label>
		<input class="form-control" id="inputEmail" autofocus="" required="" type="email" placeholder="Email address">
		<label class="sr-only" for="inputPassword">Mot de Passe</label>
		<input class="form-control" id="inputPassword" required="" type="password" placeholder="Password">
		<div class="checkbox mb-3">
			<label>
			<input type="checkbox" value="remember-me"> Rester Connecté
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
		<div style ="font-size: 0.8em; text-size-adjust: auto; font-family: Arial, Helvetica, sans-serif; margin: 1em; text-align : center">
			Nouveau joueur ? 
			<a class="mt-5 mb-3 text-muted" href="/newUser.php">Crée un compte</a>
		</div>
		<p class="mt-5 mb-3 text-muted">© 2019-2020</p>
	</form>
	

</body>
</html>