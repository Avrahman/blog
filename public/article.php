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

					<p id="invite_commentaire"> <a onClick='javascript:afficher_form()' href="#"> Commenter cet article </a> </p>
					<div class="form_cacher" id="comment">

						<fieldset class="connexion_cacher" id="connexion_id">
							<legend> Connexion </legend>
							<form action="../src/connexion_parse.php" method="post">
								<label for="login"> Login </label>
									<input type="text" name="login" placeholder="Saisir le login" />
								<label for="passwordl"> Mot de passe </label>
									<input type="text" name="password" placeholder="Mot de passe" />
								<br /> <br />
								<input type="submit" name="admin" value="Envoyer" />
							</form>
						</fieldset>

						<fieldset class="inscription_cacher" id="inscription_id">
							<legend> Inscription </legend>
							<form action="../src/inscription_parse.php" method="post">
								<label for="user_name"> Nom </label>
									<input type="text" name="user_name" placeholder="Nom" />
								<label for="login"> Login </label>
									<input type="text" name="login" placeholder="Saisir le login" />
								<label for="email"> Email </label>
									<input type="text" name="email" placeholder="email" />
								<label for="passwordl"> Mot de passe </label>
									<input type="text" name="password" placeholder="Mot de passe" />
								<br /> <br />
								<input type="submit" name="admin" value="Envoyer" />
							</form>
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