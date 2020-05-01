<?php
class Article {
	private $id;
	private $titre;
	private $contenu;
	private $nomAuteur;
	private $prenomAuteur;
	private $adresseImage;
	private $dateCreation;
	private $miseAjour;
	

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

	public function setNomAuteur ($authName) {
		if(is_string($authName)) {
			$this->nomAuteur = $authName;
		} else {
			echo("le Champ nom auteur doit être une chaine de carectères");
			return;
		}
	}

	public function setPrenomAuteur ($authForeName) {
		if(is_string($authForeName)) {
			$this->prenomAuteur = $authForeName;
		} else {
			echo("le Champ email doit être une chaine de carectères");
			return;
		}
	}

	public function setAdresseImage ($imgAdress) {
		if(is_string($imgAdress)) {
			$this->adresseImage = $imgAdress;
		} else {
			echo("le Champ adresse image image doit être une chaine de carectères");
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

	public function setAdministrateurId ($adminId) {
		if(is_string($adminId)) {
			$this->administrateurId = $adminId;
		} else {
			echo("le Champ administrateur Id doit être une chaine de carectères");
			return;
		}
	}

	////////////// Getters ///////////////////////////

	public function getId () {
		return $this->_id;
	}

	public function getTitre () {
		return $this->titre;
	}

	public function getContenu () {
		return $this->contenu;

	}

	public function getNomAuteur () {
		return $this->nomAuteur;
	}

	public function getPrenomAuteur () {
		return $this->prenomAuteur;
	}

	public function getAdresseImage () {
		return $this->adresseImage;
	}

	public function getDateCreation () {
		return $this->dateCreation;
	}

	public function getMiseAjour () {
		return $this->miseAjour;
	}

	public function getAdministrateurId () {
		return $this->administrateurId;
	}
}
?>