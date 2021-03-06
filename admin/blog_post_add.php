<?php
	$title = "Ajout d'un article";
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Blog de fin de stage Programmeur PHP-Symfony">
		<meta name="author" content="Abderahmane REDOUANE">
		<link rel="icon" href="../images/icon.gif">
		<title> <?php echo $title ?> </title>
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
						<form action="../src/blog_post_add_parse.php" method="post" enctype="multipart/form-data">
							<label for='heading'> Titre de l'artcle </label>
								<input type='text' name='heading' placeholder="Saisir le titre de l'article" />
							<label for='content'> Texte de l'article </label>
								<textarea name='content'> Insérez ici le contenu de l'article </textarea>
							<label for='author'> Auteur </label>
								<input type='text' name='author' placeholder="Sasir le nom de l'auteur" />
							<label for='image'> Adresse de l'image </label>
								<input type='text' name='image' placeholder="Insérer l'adresse de l'image" />
							<label for='ajouet_image'> Ajouter une image </lable>
								<input type='file' name='une_image' />

								<br /> <br />

							<input type="submit" name="postAdd" value="Envoyer" />
						</form>
					</fieldset>					
                </article>



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