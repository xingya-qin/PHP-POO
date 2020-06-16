<?php

require 'message.php';

$msg = new Message();

if(isset($_POST['submit'])){
	$auteur = $_POST['auteur'];
	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$contenu = $_POST['contenu'];

	//var_dump($auteur,$email,$sujet,$contenu);
	$msg->setAuteur($auteur);
	$msg->setEmail($email);
	$msg->setSujet($sujet);
	$msg->setContenu($contenu);


  echo "<br>";
  echo "Auteur: ". $msg->getAuteur(). " <br> Sujet : ".$msg->getSujet()." <br>Mail: ".$msg->getEMail()."<br> Contenu ".$msg->getContenu();
  echo "<br>";

}

?>



<br>
<br>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Message TP</title>
  </head>
  <body>
    <h1>Message TP POO</h1>

    <form method="POST">
	<div class="form-row">
	  	<div class="form-group col-md-6">
	      	<label for="inputAuteur">Auteur</label>
	      	<input type="text" class="form-control" id="inputAuteur" name="auteur">
	    </div>
	    <div class="form-group col-md-6">
	      	<label for="inputEmail4">Email</label>
	      	<input type="email" class="form-control" id="inputEmail4" name="email">
	    </div>
	
		<div class="form-group col-md-6">
      		<label for="inputSujet">Sujet</label>
      		<input type="text" class="form-control" id="inputSujet" name="sujet">
    	</div>
    	<div class="form-group col-md-6">
    		<label for="inputContenu">Contenu</label>
    		<textarea class="form-control" id="inputContenu" rows="3" name="contenu"></textarea>
 		</div>
 	</div>
  		<button type="submit" class="btn btn-primary" name="submit">Valider</button>
	</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
