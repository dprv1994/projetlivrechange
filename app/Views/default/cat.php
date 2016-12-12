<?php $this->layout('layout', ['title' => 'Mon Chat']) ?>

<?php $this->start('main_content') ?>


	<div class="container">
	
		<h2><?=$name?></h2>

		<ul>
			<li><?=$color;?></li>
			<li><?=$age;?></li>
			<img src="<?= $this->assetUrl('/img/cat.jpg') ?>"></li>
		</ul>	
	</div>	

<?php $this->stop('main_content') ?>