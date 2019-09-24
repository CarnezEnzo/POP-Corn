<?php
	include(dirname(__DIR__).'/outils/accesseurs.php');
?>

<header>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>oCarnak</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site trop bien.">
	<meta name="keywords" content="voiture recherche modele">

	<link href=<?php echo get_relative_path('css/style.css');?> rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href=<?php echo get_relative_path('images/logo.png');?> />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<meta property="og:title" content="Home">
	<meta property="og:description" content="Meilleur site de l'univers.">
	<meta property="og:image" content="">
	<meta property="og:type" content="article">
	<div class="topheader">
		<img class=logo src=<?php echo get_relative_path('images/logo.png');?> alt="Notre logo"\>
		<div id="admin-button" class=admin>
			<button class="" onclick="openForm()">Connexion</button>
			<form id="connexadmin" class="connexadmin" action=/oCarnak/pages/admin.php method="post" >
			<fieldset>
				<legend><b>Saisir vos identifiants</b></legend>
				<table>
					<tbody>
						<tr>
							<td> Utilisateur : </td>
							<td><input type="text" name="user" size="10" required minlength="2" maxlength="30"/></td>
						</tr>
						<tr>
							<td> Mot de passe : </td>
							<td><input type="password" name="password" size="10" required minlength="2" maxlength="30"/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Connexion"/></td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			</form>
		</div>
	</div>


	<?php
	//Sommes-nous dans la pages
	//Recuperation du nom de la page dans $pageActuelle
	$scriptName=$_SERVER['PHP_SELF'];
	$pageActuelle =substr($scriptName,strrpos($scriptName,'/')+1);
	if ($pageActuelle==='index.php'){
		$dirIndex='./';
		$dirPages='./pages/';
	}else{
		$dirIndex='../';
		$dirPages='./';
	}
	//Construction d'un tableau associatif contenant les correspondances
	//noms de pages /liens barre de navigation

	$pages=array(
	'Accueil'=>$dirIndex.'index.php',
	'Top 2019'=>$dirIndex.'pages/top2019.php',
	'Top 2018'=>$dirIndex.'pages/top2018.php',
	'Connexion'=>$dirIndex.'pages/connexion.php',
	'Inscription'=>$dirIndex.'pages/inscription.php'
	);
	?>

	<nav>
	<ul>
	<?php
		$cpt = 0;
		//Affichage des liens de navigation
		foreach($pages as $nom=>$url){

			if($cpt != 2 || $cpt != 3)
			{
				echo "\n",'
				<li>
					<ul>
						<a href="',$url,'">',$nom,'</a>
					</ul>
				</li>';
			}
			else {
					echo "\n",'<li><a href="',$url,'">',$nom,'</a></li>';
			}
			 $cpt ++;
		}
	?>
	</ul>
</nav>
</header>

<script>
	function openForm() {
		current = document.getElementById("connexadmin").style.display;
	  document.getElementById("connexadmin").style.display = (current == "block") ? "none" : "block";
	}
</script>
