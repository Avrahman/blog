<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="../images/icon.gif">
		<title> Traitement ajout blog post </title>
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
						<li> <a href="blog_post_list.php"> Articles </a> </li>
						<li> <a href=""> Mon C. V. </a> </li>
						<li> <a href=""> Mes réseaux sociaux </a> </li>
						<li> <a href="contact.php"> Contact </a> </li>
					</ul>
				</nav>
            </header>

            <section>
				<article id="article_id">

					<fieldset>
						<legend> Ajout d'un article </legend>
<?php
	if(isset($_POST['heading']) && isset($_POST['content']) && isset($_POST['author'])) {
		$heading = htmlspecialchars($_POST['heading']);
		$content = htmlspecialchars($_POST['content']);
		$author = htmlspecialchars($_POST['author']);
	}

	echo('heading : '	.$heading."<br />");
	echo('content : '	.htmlspecialchars_decode($content)."<br />");
	echo('author : '.$author."<br />");

	$correct = false;
	if(isset($_FILES['une_image']) && $_FILES['une_image']['error'] == 0) {
		if($_FILES['une_image']['size'] <50001) {
			$correct = true;
		} else {
			$correct = false;
		}
		if($_FILES['une_image']['extension'] == ".png" || $_FILES['une_image']['extension'] == ".jpg" || $_FILES['une_image']['extension'] == ".jpeg") {
			$correct = true;
		} else {
			$correct = false;
		}
		if($correct) {
			move_uploaded_file($_FILES['une_image']['tmp_name'], 'upload/'.basename($_files['une_image']['name']));
			echo("Le fichier a été correctement envoyé !");
		}
	}
?>
					</fieldset>

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