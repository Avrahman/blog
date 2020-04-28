function afficher_form() {
	document.getElementById("invite_commentaire").innerHTML =  "<a onclick='javascript:cacher_form()' href='#'> S'inscrire </a>";
	document.getElementById("comment").className = "form_afficher";
	document.getElementById("connexion_id").className = "connexion_afficher";
	document.getElementById("inscription_id").className = "inscription_cacher";
}

function cacher_form() {
	document.getElementById("invite_commentaire").innerHTML =  "<a onclick='javascript:afficher_form()' href='#'> Commenter cet article </a>";
	document.getElementById("comment").className = "form_afficher";
	document.getElementById("connexion_id").className = "connexion_cacher";
	document.getElementById("inscription_id").className = "inscription_afficher";

}