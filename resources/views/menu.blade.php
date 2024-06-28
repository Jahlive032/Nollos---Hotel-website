        <!--******************* MENU DE NAVIGATION *******************-->

<nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-3 shadow-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h1-font" href="index.php">Nollos</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="{{ url('/') }}">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="{{ url('/rooms') }}">Chambres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="{{ url('/facilities') }}">Aménagements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">A propos</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <button type="button" class="btn btn-btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</button>
                <button type="button" class="btn btn-btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#signInModal">S'inscrire</button>
            </div>
        </div>
    </div>
</nav>

        <!--******************* FORMULAIRE DE CONNEXION *******************-->

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header d-flex align-items-center">
                    <img class="fs-5 me-2 " src="{{ asset('images/icons/person-circle.svg') }}" alt="">
                    <h1 class="modal-title fs-5">Formulaire de connexion</h1>
                    <button type="reset" class="btn-close shadow-none " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Addresse email </label>
                        <input type="email" class="form-control shadow-none ">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control shadow-none ">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">Se connecter</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Mot de passe oublié?</a>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

        <!--*********************** FORMULAIRE D'INSCRIPTION ***********************-->

<div class="modal fade" id="signInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <form>
                <div class="modal-header d-flex align-items-center">
                    <img class="fs-5 me-2 " src="{{ asset('images/icons/person-lines-fill.svg') }}" alt="">
                    <h1 class="modal-title fs-5">Formulaire d'inscription</h1>
                    <button type="reset" class="btn-close shadow-none " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base ">Note: Vos coordonées doivent correspondre à votre ID( carte d'identité, passport, permis de conduire, etc) qui sera demander lors de la vérification.</span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Nom </label>
                                <input type="text" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email </label>
                                <input type="email" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Numéro</label>
                                <input type="number" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Capture</label>
                                <input type="file" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Adresse</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Code postale</label>
                                <input type="number" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" class="form-control shadow-none ">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirmation de mot de passe</label>
                                <input type="password" class="form-control shadow-none ">
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">S'inscrire</button>
                        </div>
                    </div>                  
                </div>
            </form>
        </div>
    </div>
</div>