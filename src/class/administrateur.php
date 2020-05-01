<?php
class Administrateur {
	private $id;
	private $login;
	private $adresseImage;
	private $email;
	private $motDePasse;

	// Setters
	public function setId ($id) {
		$this->id = (int) $id;
	}

	public function setLogin ($login) {
		if(is_string($login)) {
			$this->login = $login;
		} else {
			echo("le champ login doit être une chaine de carectères");
			return;
		}
	}

	public function setAdresseImage ($adresseImg) {
		if(is_string($adresseImg)) {
			$this->adresseImage = $adresseImg;
		} else {
			echo("le champ adresse image doit être une chaine de carectères");
			return;
		}
	}

	public function setEmail ($mail) {
		if(is_string($mail)) {
			$this->email = $mail;
		} else {
			echo("le champ email doit être une chaine de carectères");
			return;
		}
	}

	public function setMotDePasse ($pw) {
		if(is_string($pw)) {
			$this->motDePasse = $pw;
		} else {
			echo("le champ mot de passe doit être une chaine de carectères");
			return;
		}
	}

	// Getters
	public function getId () {
		return $this->id;
	}
	public function getLogin () {
		return $this->login
	}

	public function getAdresseImage () {
		return $this->adresseImage;
	}

	public function getEmail () {
		return $this->email;
	}

	public function getMotDePasse () {
		return $this->motDePasse;
	}
}
?>