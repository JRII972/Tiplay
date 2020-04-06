<?php
require './fonction.php';
$PlayerXml = simplexml_load_file(__DIR__.DIRECTORY_SEPARATOR.'player.xml');
$erreur = "";

echo new_player('JRII','M','2000-11-01');

if (!empty($_POST['NOM']) && !empty($_POST['PRENOM']) && !empty($_POST['PSEUDO']) && !empty($_POST['DATEOFBRITH']) && !empty($_POST['MAIL']) && !empty($_POST['SEXE']) && !empty($_POST['MDP'])){
	if (!new_player($_POST['NOM'], $_POST['PRENOM'], $_POST['PSEUDO'], $_POST['SEXE'],$_POST['DATEOFBRITH'])){
        $erreur .= 'Joueurs déjà existant !';
    }
};

?>

<!-- PAGE_Connexion 29/02/2020 15:21 WEBDEV 23 23.0.127.0 -->
<html class="htmlstd html5" lang="fr" style="overflow-x: visible;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Connexion</title><meta name="generator" content="WEBDEV">
		<meta name="viewport" content="width=device-width">
		<meta name="Description" lang="fr" content="Page de connexion au tournois Tiplay Mq">
		<meta name="keywords" lang="fr" content="Connexion Tiplay,Tiplay,Tournois E-Gaming Martinique,Martinque,Tournois Jeux vidéos">
		<style type="text/css">
			.wblien,.wblienHorsZTR {border:0;background:#FFFFFF;padding:0;text-align:center;box-shadow:none;_line-height:normal; color:#ce4d43;}.wblienHorsZTR {border:0 !important;background:transparent !important;outline-width:0 !important;} .wblienHorsZTR:not([class^=l-]) {box-shadow: none !important;}a:active{}a:visited{}*::-moz-selection{color:#FFFFFF;background-color:#E47B73;}::selection{color:#FFFFFF;background-color:#E47B73;}
			body{background:#FF0000}
		</style>
		<link href="/reset.css" rel="stylesheet" type="text/css">
		<link href="res/standard.css?100014310c1f2" rel="stylesheet" type="text/css">
		<link href="res/static.css?1000210820683" rel="stylesheet" type="text/css">
		<style type="text/css">.webdevclass-riche { transition:font-size 300ms; }</style><link href="Evolution190EvolutionRedVolution_rwd.css?10000056fcd09" rel="stylesheet" type="text/css">
		<link href="Tiplay190EvolutionRedVolution_rwd.css?10000068eef70" rel="stylesheet" type="text/css">
		<link href="palette-RedVolution_rwd.css?10000acb35816" rel="stylesheet" type="text/css">
		<link href="PAGE_Connexion_style.css?100001d6afbd0" rel="stylesheet" type="text/css">
		<style type="text/css">
		html {height:100%;overflow-x:hidden;} 
			body{backgrond:#FF0000},
			form {height:auto; min-height:100%;margin:0 auto !important;box-sizing:border-box;} 
			#A1,#tzA1{font-family:'Lucida Console', Monaco, monospace;font-size:400%;font-size:400%;color:#FFFFFF;letter-spacing:1mm;text-align:center;text-transform:uppercase;vertical-align:auto;}.padding#A1,.webdevclass-riche #A1,.webdevclass-riche#A1,.padding#tzA1,.webdevclass-riche #tzA1,.webdevclass-riche#tzA1{padding-right:0;}.wbplanche{background-repeat:repeat;background-position:0% 0%;background-attachment:scroll;background-size:auto auto;background-origin:padding-box;}.wbplancheLibInc{_font-size:1px;}</style>
	</head>
	
	<body class="wbRwd" style="overflow: hidden visible;">
		<form name="PAGE_CONNEXION" action="/newUser.php" target="_self"  method="post" class="clearfix" >
			<div class="h-0">
				<input type="hidden" name="WD_JSON_PROPRIETE_" value="">
				<input type="hidden" name="WD_BUTTON_CLICK_" value="A3">
				<input type="hidden" name="WD_ACTION_" value="">
			</div>
			<div class="clearfix pos1">
				<div id="page" class="clearfix ancragecenter pos2" data-window-width="479" data-window-height="600" data-width="480" data-height="600">
					<div class="clearfix ancragecenter pos3">						
						<div class="clearfix ancragecenter pos4">
							<div class="clearfix ancragecenter pos5">
								<div class="clearfix ancragecenter pos6">
									<table style=" width:100%;">
										<tbody>
											<tr>
												<td id="A1" class="TXT-Normal padding webdevclass-riche">
                                                    <p>TIPLAY</p>
                                                    <p style="font-size: 0.5em;">Inscription</p>
												</td>
											</tr>
											</tbody>
										</table>
									</div>
									<div class="clearfix ancragecenter pos7">
										<table style=" width:100%;border-spacing:0.4em;height:32px;border-collapse:separate;border:0;outline:none;" id="bzA2">
											<tbody>
												<tr>
                                                    <td style="border:none;" >
                                                        <?php 
                                                            if ($erreur <> ''){?>
                                                                <div style="color: white; text-decoration: double; text-align: center; margin: 0.3em"><?= $erreur ?></div> 
                                                        <?php
                                                            }
                                                        ?>
                                                        <input type="text" minlength="3" required="true" size="122" name="PSEUDO" value="<?= $_POST['pseudo'] ?>" id="A2" class="SAI A2 padding webdevclass-riche" placeholder="Pseudo">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;" >
                                                        <input type="text" minlength="3" required="true" size="122" name="NOM" value="<?= $_POST['NOM'] ?>" id="A2" class="SAI A2 padding webdevclass-riche" placeholder="Nom">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;" >
                                                        <input type="text" minlength="3" required="true" size="122" name="Prenom" value="<?= $_POST['PRENOM'] ?>" id="A2" class="SAI A2 padding webdevclass-riche" placeholder="Prenom">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none; color: white;" >       
                                                        <input type="radio" required="true" name="SEXE" value="" id="Mal" class="webdevclass-riche" style="margin-left: 1.8em"><label for="Mal">Joueur</label>
                                                        <input type="radio" required="true" name="SEXE" value="" id="Fem" class="webdevclass-riche" style="margin-left: 3.4em"><label for="Fem">Joueuse</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;" >
														<input type="date" required="true" size="122" name="DATEOFBRITH" value="<?= !empty($_POST['DATEOFBRITH'])?>" id="A4" class="SAI A2 padding webdevclass-riche" placeholder="Date de naissance">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;" >
                                                        <input type="email" required="true" size="122" name="MAIL" value="<?= !empty($_POST['MAIL'])?>" id="A5" class="SAI A2 padding webdevclass-riche" placeholder="joueurdu972@tiplay.mq">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border:none;" >
                                                        <input type="password" required="true" minlength="10" size="122" name="MDP" value="" id="A6" class="SAI A2 padding webdevclass-riche" placeholder="Mot de Passe">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="clearfix ancragecenter  pos8">
										<input type="submit" id="A3" value="Connexion" class="BTN-Defaut wblien padding webdevclass-riche" style="width:100%;height:auto;min-height:24px;width:100%;height:auto;min-height:24px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;display:inline-block;">
										<div style ="color: white; font-size: 0.8em; text-size-adjust: auto; font-family: Arial, Helvetica, sans-serif; margin: 1em; text-align : center">
											Déjà joueur ? 
											<a style ="color: white; text-decoration: underline"; href="/login.php">Connecte toi !</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<input type="image" src="res/vide.gif" style="float:left;height:0"  alt="hidden">
				</div>
			</div>
		</form>
	</body>

</html>
