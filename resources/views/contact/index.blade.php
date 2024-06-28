@extends('template')
@section('contenu')
    <div class="my-5 px-4">
        <h2 class="fw-bold h1-font text-center">CONTACT</h2>
        <div class="h-line bg-primary"></div>
        <p class="text-center mt-3">Nous sommes là pour répondre à toutes vos questions, demandes <br> ou préoccupations. N'hésitez pas à nous contacter</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31733.99642075006!2d1.3262744000000102!3d6.164285500000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e432e1d24d2b%3A0xe429694a14bde7b!2zQmFndWlkYSwgTG9tw6k!5e0!3m2!1sfr!2stg!4v1710063534169!5m2!1sfr!2stg" height="450"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Adresse</h5>
                    <a href="https://maps.app.goo.gl/SLaoarCRpMyipfAd6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>Baguida, Lome, TOGO
                    </a>
                    <h5 class="mt-4">Contactez-nous</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+228 92 00 65 90</a>
                    <br>
                    <a href="#" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+228 22 36 45 33</a>
                    <h5 class="mt-4">E-mail</h5>
                    <a href="mailto: erickoumondji01@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>erickoumondji01@gmail.com
                    </a>
                    <h5 class="mt-4">Suivez-nous</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1 "></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1 "></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1 "></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                   <form>
                        <h5>Envoyez un message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Nom complet</label>
                            <input type="text" class="form-control shadow-none ">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">E-mail</label>
                            <input type="email" class="form-control shadow-none ">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Sujet</label>
                            <input type="text" class="form-control shadow-none ">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Envoyer</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection