<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img
                id="VAA-logo"
                src="{{asset('img/logoVaa_def_petit.png')}}"
                alt="Logo"
                draggable="false"
                height="40" class="d-inline me-3"/>Gestion du club
        </a>
        {{--le bouton qui s'affiche seulement lorsque tu réduis l'écran pour rendre l'affichage propre et aéré--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="/" style="color: black;"><i
                            class="fa fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 " href="/apropos" style="color: black;">
                        <i
                            class="fa-solid fa-address-card">
                        </i> À propos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 " href="/contact" style="color: black;"><i class="fa-solid fa-phone"></i>
                        Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                        <i class="fa fa-users"></i> Membres
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <li><a class="dropdown-item" href="login">
                                <i class="fa fa-sign-in"></i> Connexion
                            </a>
                        </li>

                        <li><a class="dropdown-item" href="dashboard"><i class="fa fa-user"></i> Profil</a></li>

                        <li>
                            <a class="dropdown-item" href="#"><i class="fa fa-sliders"></i> Préférences</a>
                        <li><hr></li>
                        <li><a class="dropdown-item" href="dashboard">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
