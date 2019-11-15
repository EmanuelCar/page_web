<nav class="navbar navbar-expand-lg">
		<a href="./Accueil/accueil.php" class="logo_accueil"> <img src="./img/logo_cesi1.png" alt="Accueil"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			  <a class="nav-link" href="https://www.cesi.fr/"> Le CESI <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="./Boutique/boutique.php">Notre Boutique</a>
			</li>
		  </ul>
		  <form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Tapez un mot..." onKeyUp="check(this)" onChange="check(this)">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			<a class="nav-link" href="./connexion.php">Connexion</a>
		  </form>
		  <a class="nav-item" href="./Panier/panier.php"><img class="Panier_btq" src="./img/panier1.png"></a>
		</div>
</nav>
