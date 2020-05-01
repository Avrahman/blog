class Utilisateur {
	private $_id;
	private $_nom;
	private $_prenom;
	private $_login;
	private $_email;
	private $_motDePasse;

	// Setters
	public function setId ($id) {
		$this->_id = (int) $id;
	}

	public function setNom ($name) {
		if(is_string($name)) {
			$this->_nom = $name;
		} else {
			echo("le Champ nom doit être une chaine de carectères");
			return;
		}
	}

	public function setPrenom ($foreaome) {
		if(is_string($foreaome)) {
			$this->_prenom = $foreaome;
		} else {
			echo("le Champ prenom doit être une chaine de carectères");
			return;
		}

	}

	public function setLogin ($login) {
		if(is_string($login)) {
			$this->_login = $login;
		} else {
			echo("le Champ login doit être une chaine de carectères");
			return;
		}
	}

	public function setEmail ($mail) {
		if(is_string($mail)) {
			$this->_email = $mail;
		} else {
			echo("le Champ email doit être une chaine de carectères");
			return;
		}
	}

	public function setPseudo ($pseudo) {
		if(is_string($pseudo)) {
			$this->_pseudo = $pseudo;
		} else {
			echo("le Champ pseudo image doit être une chaine de carectères");
			return;
		}
	}

	public function setMotDePasse ($pw) {
		if(is_string($pw)) {
			$this->_motDePasse = $pw;
		} else {
			echo("le Champ mot de passe doit être une chaine de carectères");
			return;
		}
	}

	// Getters
	public function getId () {
		return $this_id;
	}

	public function getNom () {
		return $this_nom;
	}

	public function getPrenom () {
		return $this_prenom;
	}

	public function getLogin () {
		return $this_login
	}

	public function getEmail () {
		return $this__email;
	}

	public function getPseudo () {
		return $this_pseudo;
	}

	public function getMotDePasse () {
		return $this__motDePasse;
	}
}