<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Blog de fin de stage Programmeur PHP-Symfony">
		<meta name="author" content="Abderahmane REDOUANE">
		<link rel="icon" href="images/icon.gif">
		<title> Contact </title>
		<link rel="stylesheet" href="css/main.css">
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
						<legend> Message à l'admin </legend>
						<form action="" method="post">
							<label for="contact_name"> Nom </label>
								<input type="text" name="contact_name" placeholder="Nom" />
							<label for="forename"> Prénom </label>
								<input type="text" name="contact_forename" placeholder="Prénom" />
							<label for="contact_email"> Email </label>
								<input type="text" name="contact_email" placeholder="email" />
							<label for="message_content"> Message </label>
								<textarea name="message_content" placeholder="Saisissez votre message"> </textarea>
						</form>
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