<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="../images/icon.gif">
		<title> Inscription parse </title>
		<link rel="stylesheet" href="../css/main.css">
	</head>

	<body>
        <div class="corps">
            <header>
				<div id="entete_id">
					<div id="logo">
						<p> Abderahmane REDOUANE </p>
						<img src="../images/icon_gde.gif" alt="logo" />
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
						<li> <a href="blog_post_list.php"> Articles </a> </li>
						<li> <a href=""> Mon C. V. </a> </li>
						<li> <a href=""> Mes réseaux sociaux </a> </li>
						<li> <a href="contact.php"> Contact </a> </li>
					</ul>
				</nav>
            </header>

            <section>
                <article id="article_id">

				<div>
					<div>
						<fieldset>
							<legend> Inscription </legend>

<?php
	if(isset($_POST['user_name']) && isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
		$user_name = htmlspecialchars($_POST['user_name']);
		$login = htmlspecialchars($_POST['login']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
	}

	echo("Nom : <b>".$user_name."</b><br>");
	echo("Login : <b>".$login."</b><br>");
	echo("Email : <b>".$email."</b><br>");
	echo("Mot de passe : <b>".$password."</b><br>");
?>
						</fieldset>
					</div>
				</div>

                </article>

            </section>

            <footer>
				<nav>
					<ul>
						<li> <a href="blog_post_list.php"> Articles </a> </li>
						<li> <a href=""> Mon C. V. </a> </li>
						<li> <a href=""> Mes réseaux sociaux </a> </li>
						<li>  <a href="contact.php"> Contact </a> </li>
					</ul>
				</nav>
				<a class="legales"> Mon C. V. </a>
				<a class="legales"> Mentions Légales. </a>
				<a class=""> Admin. </a>
            </footer>

        </div>  <!--  class corps -->
	</body>
</html>