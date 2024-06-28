@extends('template')
@section('contenu')
    <div class="my-5 px-4">
        <h2 class="fw-bold h1-font text-center">NOS AMEMAGEMENTS</h2>
        <div class="h-line bg-primary"></div>
        <p class="text-center mt-3">Découvrez les aménagements luxueux et les équipements de qualité qui <br>font de notre hôtel un choix incontournable pour votre prochain séjour.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_43553.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Connectez-vous et restez connecté avec notre connexion Wi-Fi haut débit disponible dans tout l'établissement.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop1">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_27079.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Chauffage</h5>
                    </div>
                    <p>Vous méritez un confort optimal, alors nous avons équipé chaque chambre avec un système de chauffage efficace.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_41622.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Télévision</h5>
                    </div>
                    <p>Détendez-vous et divertissez-vous avec notre sélection complète de chaînes de télévision par câble.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop3">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_47816.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Salle de massage</h5>
                    </div>
                    <p>Offrez-vous un moment de détente ultime dans notre luxueuse salle de massage avec nos thérapeutes qualifiés.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop4">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_49949.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Climatisation</h5>
                    </div>
                    <p>Restez au frais même pendant les journées les plus chaudes grâce à notre système de climatisation efficace.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop5">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/facilities/IMG_96423.svg') }}" alt="" width="40px">
                        <h5 class="m-0 ms-3">Radiateur</h5>
                    </div>
                    <p>Pour les amateurs de chaleur douillette, chaque chambre est équipée d'un radiateur réglable.</p>
                </div>
            </div>
        </div>
    </div>
@endsection