<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>

	
	<h1>COMMENT ÇA MARCHE?</h1>

		<br><br>
		<section id="zone1">
			<div id="container-colonnes">
				<div class="colonnes">

				<h3>Echanger</h3>
			
				<p>Vous possédez des livres que vous ne lirez plus, qui prennent la poussière et vous posent un problème de stockage !<br>
				Vous ne savez pas quoi en faire? Plutôt que de les jeter, notre site vous propose de les échanger entre passionnés de lecture, et par ce biais peut-être trouver le livre que vous souhaitez lire, vous évitant ainsi un nouvel investissement financier. Et de trouver le parfait troc pour vous !</p>
				</div>

				<div class="colonnes">
				<h3>Se rencontrer</h3>
				
				<p>Le but étant de vous permettre de rencontrer, par le biais de ce site, les propriétaires des livres qui vous intéressent.<br>
				Pour cela nous avons sélectionné des lieux partenaires (cafés, bars..) qui vous permettront de retrouver facilement la personne avec qui vous avez rendez-vous, et qui vous offriront un cadre agréable pour discuter le temps de votre transaction.<br>
				Aucun système de livraison n'est proposé sur notre site.<br>
				Pourquoi? Dans une époque où les gens n'intéragissent principalement que par l'intermédiaire des machines, nous pensons qu'il est important de continuer à échanger "en direct"..<br>
				</p>
				</div>
			</div>
		</section>

		<br><br><br><br>
		<div class="btnsubmit">
		<a href="<?=$this->url('user_signIn')?>">
		<button type="submit" class="linebuttons" name="register">S'INSCRIRE</button>
		</a>
		</div>
		

		<!-- <br><br>
		<section id="zone2">
			<div class="colonne">
				<h3>Notre démarche</h3>

				<div id="text">
				<p>LivrEchange vous permet d'être mis en contact et d'échanger vos livres facilement avec les personnes de votre région !<br>
				Inscrivez-vous, remplissez votre profil, et partez à la recherche de nouvelles lectures !<br>
				Grâce à notre partenariat avec de nombreux cafés locaux, retrouvez sans difficulté la personne avec qui vous devez échanger.<br>
				Il vous suffit de jeter un oeil à notre <a href="">carte des lieux</a> pour trouver le point de rendez-vous le plus proche de chez vous!<br>

				Et pourquoi ne pas en profiter pour boire un bon café en profitant de votre nouveau livre !</p>
				</div>
			</div>
		</section> -->

		<br><br><br><br>

<?php $this->stop('main_content') ?>
