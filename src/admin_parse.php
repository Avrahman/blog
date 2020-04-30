<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="images/icon.gif">
		<title> Admin identification parse </title>
		<link rel="stylesheet" href="../css/main.css">
	</head>

	<body>
        <div class="corps">
            <header>
				<div id="entete_id">
					<div id="logo">
						<p> Abderahmane REDOUANE </p>
						<img src="images/icon_gde.gif" alt="logo" />
					</div>
				

					<div id="titre">
						<p id="titre1"> B L O G </p>
					</div>

					<div id="infos">
						<p> Blog de fin de formation </p>
						<p> Programmeur PHP-Symfony </p>
						<p> Openclassrooms </p>
					</div>

				</div>
				<nav>
					<ul>
						<li> <a href="index.php"> Accueil </a> </li>
						<li> <a href="blog_post_list.php"> Articles </a> </li>
						<li> <a href=""> Mon C. V. </a> </li>
						<li> <a href=""> Mes réseaux sociaux </a> </li>
					</ul>
				</nav>
            </header>

            <section>
				<article id="article_id">
					<fieldset>
						<legend> Admin authentification </legend>

<?php
	if(isset($_POST['login']) && isset($_POST['passWord'])) {
		$admin_name = htmlspecialchars($_POST['login']);
		$password = htmlspecialchars($_POST['passWord']);
	}

	echo("Admin name : <b>".$admin_name."</b><br>");
	echo("Mot de passe : <b>".$password."</b><br>");
?>
					</fieldset>					
                </article>

            </section>

            <footer>
				<nav>
					<ul>
						<li> <a href="index.php"> Accueil </a> </li>
						<li> <a href="blog_post_list.php"> Articles </a> </li>
						<li> <a href=""> Mon C. V. </a> </li>
						<li> <a href=""> Mes Réseaux sociaux </a> </li>
					</ul>
				</nav>
				<a class="legales"> Mon C. V. </a>
				<a class="legales"> Mentions Légales. </a>
				<a class=""> Admin. </a>
            </footer>

        </div>  <!--  class corps -->
	</body>
</html>