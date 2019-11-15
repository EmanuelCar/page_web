<nav class="navbar navbar-expand-lg">
    <a href="/SiteWeb/" class="logo_accueil"> <img src="/SiteWeb/img/logo_cesi1.png" alt="Accueil"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://www.cesi.fr/"> Le CESI <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/SiteWeb/Boutique/boutique.php">Notre Boutique</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="/SiteWeb/Ajout_article/form_admin.php"> Gérer les articles</a>
            <input class="form-control mr-sm-2" type="text" placeholder="Tapez un mot..." onKeyUp="check(this)" onChange="check(this)">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a class="nav-link" href="/SiteWeb?test=1">Déconnexion</a>
            <?php if(isset($_GET['test'])) {
				setcookie("tokenCookie", "", time() - 3600);
				setcookie("statut", "", time() - 3600);
				setcookie("connecté", 0);
				header('Location: /SiteWeb/');
			} ?>
        </form>
        <a class="nav-item" href="/SiteWeb/Panier/Panier.php"><img src="/SiteWeb/img/panier1.png" class="Panier_btq"></a>
    </div>
</nav>