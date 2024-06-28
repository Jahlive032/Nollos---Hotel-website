<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <title>Dashboard</title>
    </head>
    <body class="bg-white">

        <header>
            <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top " id="header">
                <h3 class="mb-0">NOLLOS</h3>
                <a href="#" class="btn btn-light btn-sm">Déconnexion</a>
            </div>

            <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2 text-light">Tableau de bord</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../dashboard">Tableau de bord</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Chambres</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Utilisateurs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../settings">Paramètres</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <main>
            @yield('contenu')
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>