@extends('template')
@section('contenu')
    <div class="my-5 px-4">
        <h2 class="fw-bold h1-font text-center">NOS CHAMBRES</h2>
        <div class="h-line bg-primary"></div>
        <p class="text-center mt-3">Bienvenue dans le sanctuaire de confort et de tranquillité de <strong>Nollos</strong>. Nos chambres élégamment aménagées <br> sont conçues pour offrir à nos clients un refuge luxueux où ils peuvent se détendre</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filtres</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Voir les disponibilités</h5>
                                <label class="form-label">Arrivée</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Départ</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Aménagements</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="facilitie_1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="facilitie_1">Aménagement 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="facilitie_2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="facilitie_2">Aménagement 2</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="facilitie_3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="facilitie_3">Aménagement 3</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Invités</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adulte(s)</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Enfant(s)</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 md-lg-0 mb-md-0 mb-3">
                            <img src="{{ asset('images/rooms/4.jpg') }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Chambre simple</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Caractéristiques</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Aménagements</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-1">Invités</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">200€ la nuitée</h6>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">Plus de détails</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 md-lg-0 mb-md-0 mb-3">
                            <img src="{{ asset('images/rooms/2.jpg') }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Chambre simple</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Caractéristiques</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Aménagements</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-1">Invités</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">170€ la nuitée</h6>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">Plus de détails</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 md-lg-0 mb-md-0 mb-3">
                            <img src="{{ asset('images/rooms/3.jpg') }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Chambre simple</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Caractéristiques</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Aménagements</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                            </div>
                            <div class="facilities">
                                <h6 class="mb-1">Invités</h6>
                                <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                                <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">95€ la nuitée</h6>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">Plus de détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection