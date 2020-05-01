<?php
class Commentaire {
	private $id;
	private $titre;
	private $contenu;
	private $dateCreation;
	private $utilisateurId;

	////////////  Setters ///////////////////

	public function setId ($id) {
		$this->id = (int) $id;
	}

	public function setTitre ($title) {
		if(is_string($title)) {
			$this->titre = $title;
		} else {
			echo("le Champ titre doit être une chaine de carectères");
			return;
		}
	}

	public function setContenu ($content) {
		if(is_string($content)) {
			$this->contenu = $content;
		} else {
			echo("le Champ contenu doit être une chaine de carectères");
			return;
		}

	}

	public function setDateCreation ($creationDate) {
		if(is_string($creationDate)) {
			$this->dateCreation = $creationDate;
		} else {
			echo("le Champ date de creation doit être une chaine de carectères");
			return;
		}
	}

	public function setMiseAjour ($update) {
		if(is_string($update)) {
			$this->miseAjour = $update;
		} else {
			echo("le Champ date de creation doit être une chaine de carectères");
			return;
		}
	}

	public function setUtilisateurId ($userId) {
		if(is_string($userId)) {
			$this->utilisateurId = $userId;
		} else {
			echo("le Champ administrateur Id doit être une chaine de carectères");
			return;
		}
	}

	////////////// Getters ///////////////////////////

	public function getId () {
		return $this->id;
	}

	public function getTitre () {
		return $this->titre;
	}

	public function getContenu () {
		return $this->contenu;

	}

	public function getDateCreation () {
		return $this->dateCreation;
	}

	public function getUtilisateurId () {
		return $this->utilisateurId;
	}
}
?>