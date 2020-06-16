<!--créer une classe Message avec comme attributs :
- auteur
- email
- sujet
- contenu
Créer les getters/setters

faire un formulaire avec des champs correspondants à chaque attribut
en retour de formulaire : 
- instancier un objet Message
- setter les valeurs de ses attributs avec les données venant du formulaire
- afficher les données à partir de l'objet -->


<?php

class Message
{

	private $auteur;
	private $email;
	private $sujet;
	private $contenu;

	//Auteur//
	public function getAuteur()
	{
		return $this->auteur;
	}

	public function setAuteur($auteur)
	{

		return $this->auteur = $auteur;
	}

	//Email//
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{

		return $this->email = $email;
	}

	//Sujet//
		public function getSujet()
	{
		return $this->sujet;
	}

	public function setSujet($sujet)
	{

		return $this->sujet = $sujet;
	}

	//Contenu//
	public function getContenu()
	{
		return $this->contenu;
	}

	public function setContenu($contenu)
	{

		return $this->contenu = $contenu;
	}

}


?>











