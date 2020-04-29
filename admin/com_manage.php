<?php
	$title = "Validation des commentaire d'un article";
	$titre = "Titre de l'article";
	$chapo = "Ceci est le début du premier pragraphe";
	$content = "Ceci, par contre, est le texte en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'article. Ceci, par contre, est le texte en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'article. Ceci, par contre, est le texte en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'article. Ceci, par contre, est le texte en entier, non seulement du premier  paragraphe, mais ".
				"de tout l'article.";
	$auteur = "OnPeutConsiderer  queCestMoi";
	$saved_date = "Pas de mise à jour mais on va arranger ça sous peu";
	$liste_commentaire = "Somme comment's array";
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

		<script src="../biblio/afficher_cacher_form.js">	</script>
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
                <article>

				<div>
<?php
					echo("<p>".$content."</p><br /><br />");
?>					

				</div>

				<div>

<?php
	$com = [["tire", "Contenu", "Auteur", "Saved date"], ["tire", "Contenu", "Auteur", "Saved date"], ["title", "Content", "Auteur", "Saved date"]];
				foreach($com as $k => $v) {
					echo(($k+1)." - ");
					foreach($v as $k2 => $v2) {
						echo(($k2+1)." : ".($v2).", ");
					}
					echo(" : Supprimer : <input type='radio' name=$k value='$k"."1'> Valider : <input type='radio' name=$k value='$k"."2'> <input type='submit' value='Valider'><br />");
				}
?>


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