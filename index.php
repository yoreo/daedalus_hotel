<?php include('header.php'); ?>

<div id="entete_a"></div>
				<div id="text_a">
					<i class="fa fa-university"></i>
					<p id="d">
						LE DEADALUS hôtel à Lyon Gerland
					</p>
					<p> 
						A proximité du centre ville de Lyon, Cosmos Hôtel vous propose un hébergement de qualité pour un budget raisonnable. Nous vous accueillions dans une cadre moderne et confortable.
					</p>
					<p>
						Qu'il s'agisse de séjours d'affaire ou d'un week-end touristique, une seule priorité pour notre équipe, votre satisfaction.
					</p>
				</div>
				<div>
					<form class="contact" action="#" method="post">
						<fieldset>
							<legend><i class="fa fa-building"></i></legend>
								<p>
									<label for="date">Arivée</label>
									<input type="date" name="date" id="date" required="">
								</p>
								<p>
									<label for="date2">Départ</label>
									<input type="date" name="date2" id="date2" required="">
								</p>
							<p>
								<label for="adultes">Adultes</label>
								<select name="d1" id="d1" size="1">
								<option selected>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								</select>
							</p>
							<p>
								<label for="enfants">Enfants</label>
								<select name="d2" id="d2" size="1">
								<option selected>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								</select>
							</p>
						</fieldset>
							<p class="clearfix">
								<input type="submit" value="Réserver">
							</p>
					</form>
				</div>

<?php include('footer.php'); ?>