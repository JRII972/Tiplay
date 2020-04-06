<?php
$PlayerXml = simplexml_load_file(__DIR__.DIRECTORY_SEPARATOR.'player.xml');
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

		<link href="./bootstrap_4_4.css" rel="canonical">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

			<!-- Favicons -->
		<link href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
		<link href="/docs/4.4/assets/img/favicons/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
		<link href="/docs/4.4/assets/img/favicons/favicon-16x16.png" rel="icon" type="image/png" sizes="16x16">
		<link href="/docs/4.4/assets/img/favicons/manifest.json" rel="manifest">
		<link href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" rel="mask-icon" color="#563d7c">
		<link href="/docs/4.4/assets/img/favicons/favicon.ico" rel="icon">
		<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#563d7c">


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
		<link href="signin.css" rel="stylesheet">
	</head>
  <body class="text-center">
    <form class="form-signin">
		<img width="72" height="72" class="mb-4" alt="" src="./img/partie/noPicture.jpg">
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
		<p class="mt-5 mb-3 text-muted">© 2019-2020</p>
	</form>
	<div class="clearfix ancragecenter pos8">
		<input type="submit" id="A3" value="Connexion" class="BTN-Defaut wblien padding webdevclass-riche" style="width:100%;height:auto;min-height:24px;width:100%;height:auto;min-height:24px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;display:inline-block;">
		<div style ="color: white; font-size: 0.8em; text-size-adjust: auto; font-family: Arial, Helvetica, sans-serif; margin: 1em; text-align : center">
			Nouveau joueur ? 
			<a style ="color: white; text-decoration: underline"; href="/newUser.php">Crée un compte</a>
		</div>
	</div>

</body>
</html>