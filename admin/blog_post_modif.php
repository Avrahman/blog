<?php
	$title 	= "Modification d'un article";
	$titre 	= "Ancien titre de article";
	$image 	= "ancien adresse de l'image";
	$content = "Ancien tesxte de l'article. Le texte est affiché en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'articleVoisi le nouveau article. Le texte est affiché en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'articleVoisi le nouveau";
	$author = "nom de l'auteur du texte ou de la modification";
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

					<div>
						<?php
							echo("<h1>". $titre ."</h1>");
							echo("<p>". $image ."</p>");
							echo("<p>". $content ."</p>");
							echo("<p>". $author ."</p>");
						?>
					</div>

				<article id="article_id">
					<fieldset>
						<legend> Mise à jour d'un article </legend>
						<form action="" method="post">
<?php
echo<<<end
							<label for='heading'> Insérer le nouveau titre </label>
								<input type='text' name='heading' placeholder=$titre />
							<label for='content'> Modifier le texte de l'article </label>
								<textarea name='content' placeholder=$content> A changer ? $content </textarea>
							<label for='author'> Auteur de la modification </label>
								<input type='text' name='author' placeholder=$author />
							<label for='image'> Changer l'adresse de l'image </label>
								<input type='text' name='image' placeholder=$image />

								<br /> <br />

							<input type="submit" name="admin" value="Envoyer" />
end;
?>
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