<?php
class Contact {
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $objet;
	private $texteDuMessage;
	private $theDate;
	private $utilisateurId;

	////////////  Setters ///////////////////

	public function setId ($id) {
		$this->id = (int) $id;
	}

	public function setNom ($name) {
		if(is_string($name)) {
			$this->nom = $name;
		} else {
			echo("le Champ nom auteur doit être une chaine de carectères");
			return;
		}
	}

	public function setPrenom ($forename) {
		if(is_string($forename)) {
			$this->prenom = $forename;
		} else {
			echo("le Champ prenom doit être une chaine de carectères");
			return;
		}
	}

	public function setEmail ($mail) {
		if(is_string($mail)) {
			$this->email = $mail;
		} else {
			echo("le Champ email doit être une chaine de carectères");
			return;
		}
	}

	public function setObjet ($subject) {
		if(is_string($subject)) {
			$this->objet = $subject;
		} else {
			echo("le Champ objet doit être une chaine de carectères");
			return;
		}
	}

	public function setTexteDuMessage ($text) {
		if(is_string($text)) {
			$this->texteDuMessage = $text;
		} else {
			echo("le Champ contenu du message doit être une chaine de carectères");
			return;
		}

	}

	public function setDate ($creationDate) {
		if(is_string($creationDate)) {
			$this->theDate = $creationDate;
		} else {
			echo("le Champ date doit être une chaine de carectères");
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

	public function getNom () {
		return $this->nom;
	}

	public function getPrenom () {
		return $this->prenom;
	}

	public function getEmail () {
		return $this->email;
	}

	public function getObjet () {
		return $this->objet;
	}

	public function getTexteDuMessage () {
		return $this->texteDuMessage;
	}

	public function getDate () {
		return $this->theDate;
	}

	public function etUtilisateurId () {
		return $this->utilisateurId;
}
?>