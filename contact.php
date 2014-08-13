<?php include('header.php'); ?>

<form class="contact" action="envoicontact.php" method="post">
			<fieldset>
				<legend><i class="fa fa-user"></i></legend>
				<p>
					<label for="prenom">Prénom</label>
					<input class="nom" placeholder="Votre prénom" type="text" name="nom" id="nom" required="">
				</p>
				<p>
					<label for="nom">Nom</label>
					<input placeholder="Votre nom" type="text" name="prenom" id="prenom" required="">
				</p>
				<p>
					<label for="societe">Société</label>
					<input placeholder="Votre société" type="text" name="societe" id="societe" required="">
				</p>
				<p>
					<label for="tel">Téléphone</label>
					<input placeholder="Votre téléphone" type="text" name="tel" id="tel" required="">
				</p>
				<p>
					<label for="email">Email</label>
					<input placeholder="Votre email" type="email" name="email" id="email" required="">
				</p>
			</fieldset>
			<fieldset id="mess">
				<legend><i class="fa fa-envelope"></i></legend>
				<p class="ztexte">
					<textarea placeholder="Votre message" name="message" id="message" cols="30" rows="10"></textarea>
				</p>
			</fieldset>
				<p class="clearfix">
					<input type="submit" value="Envoi">
				</p>
			</form>

<?php include('footer.php'); ?>			