<?php include('header.php'); ?>

	<div id="send">
			<i id="p" class="fa fa-paper-plane-o"></i>
		<?php 
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$societe = $_POST['societe'];
			$message = $_POST['message'];
			$tel = $_POST['tel'];
			$email = $_POST['email'];

			$to      = 'monnot.romain@live.fr';
			$subject = 'from: '.$nom." ".$prenom." ".$societe." ".$tel;
			$headers = 'from: '.$email . "\r\n" .
			    'Reply-To: '.$email . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			if (mail($to, $subject, $message, $headers)){
				echo"&nbsp;&nbsp;message envoyé&nbsp;&nbsp;";
			}
			else{
				echo"erreur, veuiller remplir les champs manquants";
			}
		 ?>
		    <i id="p" class="fa fa-paper-plane-o"></i>
	</div>

<?php include('footer.php'); ?>