@extends('template')
@section('contenu')
    <div class="my-5 px-4">
        <h2 class="fw-bold h1-font text-center">A PROPOS DE NOUS</h2>
        <div class="h-line bg-primary"></div>
        <p class="text-center mt-3">Bienvenue dans l'univers de <strong>Nollos</strong>, où le confort, le style et l'hospitalité <br> se rencontrent pour créer une expérience inoubliable pour nos précieux clients.</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Expérience</h3>
                <p>
                    Depuis près de <strong>15 ans</strong>, nous nous engageons à offrir des séjours exceptionnels
                    et des services de première classe dans un cadre chaleureux et accueillant. Nous croyons en la
                    préservation de notre environnement et en la responsabilité sociale. Nous nous efforçons de créer
                    un environnement où le confort, la convivialité et le service exceptionnel se rejoignent pour créer
                    des souvenirs durables pour nos clients.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-2 order-1">
                <img src="{{ asset('images/about/about.jpg') }}" alt="logo" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="{{ asset('images/about/hotel.svg') }}" width="70px">
                    <h4 class="mt-3">+100 Chambres</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="{{ asset('images/about/customers.svg') }}" width="70px">
                    <h4 class="mt-3">+200 Clients</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="{{ asset('images/about/rating.svg') }}" width="70px">
                    <h4 class="mt-3">+150 Retours</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="{{ asset('images/about/staff.svg') }}" width="70px">
                    <h4 class="mt-3">+100 Recrutements</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h1-font text-center">EQUIPE DE DIRECTION</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="{{ asset('images/about/IMG_17352.jpg') }}" class="w-100">
                    <h5 class="mt-2">John Doe</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection