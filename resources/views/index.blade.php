@extends('template')
@section('contenu')

    <!-- ************************************** CAROUSEL ***************************************** -->

    <div class="containr-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_15372.png') }}" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_40905.png') }}" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_55677.png') }}" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_62045.png') }}" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_93127.png') }}" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/carousel/IMG_99736.png') }}" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- ************************************** CHECKING ***************************************** -->

    <div class="container contain">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded ">
                <h5 class="mb-4">Disponibilité</h5>
                <form class="">
                    <div class="row align-items-end ">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Arrivée</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Départ</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adulte(s)</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Enfant(s)</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- ************************************** ROOMS ***************************************** -->
    <h2 class="mt-5 pt-4 text-center fw-bold h1-font">NOS CHAMBRES</h2>
    <div class="container">
        <div class="row">

        <!-- *********************************************** CHAMBRE1 ********************************************** -->

            <div class="col-lg-4 col-md-6 my-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="{{ asset('images/rooms/4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Chambre simple</h5>
                        <h6 class="mb-4">200€ la nuitée</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Caractéristiques</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Aménagements</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Invités</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Classement</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- *********************************************** CHAMBRE2 ********************************************** -->

            <div class="col-lg-4 col-md-6 my-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="{{ asset('images/rooms/2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Chambre simple</h5>
                        <h6 class="mb-4">170€ la nuitée</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Caractéristiques</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Aménagements</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Invités</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Classement</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- *********************************************** CHAMBRE3 ********************************************** -->

            <div class="col-lg-4 col-md-6 my-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="{{ asset('images/rooms/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Chambre simple</h5>
                        <h6 class="mb-4">95€ la nuitée</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Caractéristiques</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">2 chambres</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 salle de bain</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">1 balcon</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">3 canapés</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Aménagements</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Télévision</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">Chauffage</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Invités</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap">5 Adultes</span>
                            <span class="badge rounded-pill text-bg-light text-wrap">4 Enfants</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Classement</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservez maintenant</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="../rooms" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Voir plus >>></a>
            </div>
        </div>
    </div>

    <br>

    <!-- ************************************** FACILIIES ***************************************** -->
    <h2 class="mt-5 pt-4 text-center fw-bold h1-font">NOS AMENAGEMENTS</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="{{ asset('images/facilities/IMG_43553.svg') }}" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="{{ asset('images/facilities/IMG_27079.svg') }}" alt="" width="80px">
                <h5 class="mt-3">Chauffage</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="{{ asset('images/facilities/IMG_41622.svg') }}" alt="" width="80px">
                <h5 class="mt-3">Télévision</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="{{ asset('images/facilities/IMG_47816.svg') }}" alt="" width="80px">
                <h5 class="mt-3">Salle de massage</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="{{ asset('images/facilities/IMG_49949.svg') }}" alt="" width="80px">
                <h5 class="mt-3">Climatisation</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="../facilities" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Voir plus >>></a>
            </div>
        </div>
    </div>

    <br>

    <!-- ************************************** TESTIMONIALS ***************************************** -->
    <h2 class="mt-5 pt-4 text-center fw-bold h1-font">TEMOIGNAGES</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper swipe">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-chat-square-quote"></i>                            
                        <h6 class="m-0 ms-2">Jean Hugues</h6>
                    </div>
                    <p>
                        "J'ai réservé une chambre dans cet hôtel pour un voyage d'affaires et j'ai été
                        agréablement surpris par la qualité du service. Le processus de réservation était
                        simple et efficace, et la chambre était confortable et propre. Je recommande vivement
                        cet hôtel à tous ceux qui cherchent un hébergement de qualité." 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-chat-square-quote"></i>                            
                        <h6 class="m-0 ms-2">Justine Mintsa</h6>
                    </div>
                    <p>
                        "Notre séjour dans cet hôtel a été parfait du début à la fin. Le personnel
                        était extrêmement serviable et attentionné, et la chambre était impeccable.
                        Nous avons également été impressionnés par les installations disponibles, 
                        notamment la piscine et le centre de remise en forme. Nous avons hâte de 
                        revenir lors de notre prochain voyage." 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-chat-square-quote"></i>                            
                        <h6 class="m-0 ms-2">Emmanuel TOGBE</h6>
                    </div>
                    <p>
                        "Nous avons réservé une suite pour notre lune de miel et nous avons été
                        enchantés par notre séjour. La chambre était magnifique, avec une vue 
                        imprenable sur la ville. Le personnel de l'hôtel a même laissé une petite
                        surprise romantique dans notre chambre pour célébrer notre mariage. 
                        Nous sommes reconnaissants pour cette expérience inoubliable." 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Voir plus >>></a>
        </div>
    </div>

    <br><br>

    <!-- ************************************** REACH US ***************************************** -->
    <h2 class="mt-5 pt-4 text-center fw-bold h1-font">CONTACT</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31733.99642075006!2d1.3262744000000102!3d6.164285500000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e432e1d24d2b%3A0xe429694a14bde7b!2zQmFndWlkYSwgTG9tw6k!5e0!3m2!1sfr!2stg!4v1710063534169!5m2!1sfr!2stg" height="450"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Contactez-nous</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+228 92 00 65 90</a>
                    <br>
                    <a href="#" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+228 22 36 45 33</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Suivez-nous</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter-x me-1 "></i>Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1 "></i>Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1 "></i>Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
@endsection



   