<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=$this->url('admin_indexBack')?>">LivrEchange</a>
		</div>


			<p class="navbar-text navbar-left">
				<span class="text-primary">Bonjour <strong><?=$w_user['username'];?></strong></span>
			</p>
		<div id="nav-bar-back">
    	<ul id="nav-bar-back">

      		
      		    
      			<li><a href="">Infos</a></li>
		        <li><a href="<?=$this->url('user_list')?>">Utilisateurs</a></li>
		        <li><a href="">Messages</a></li>
		        
		        <li><a href="">Actus</a></li>
		        <li><a target="_blank" href="<?=$this->url('default_home')?>" id="logout">Voir le site</a></li>
      			<li><a href="<?=$this->url('logout')?>">Déconnexion</a></li>

    	</ul>
    	</div>

  	</div>
</nav>