<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <title>Apprendiamoci</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
            <div style="width: 200px">
                <a href="/">
                    <img src="img/mcspada.png" alt="logo" width="100%">
                </a>
            </div>

                @error('email')
                    <div class="navbar-nav">
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    </div>
                @enderror

                @error('name')
                    <div class="navbar-nav">
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    </div>
                @enderror

                @error('password')
                    <div class="navbar-nav">
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    </div>
                @enderror

                @error('surname')
                    <div class="navbar-nav">
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    </div>
                @enderror

            <div class="navbar-collapse navbar-nav">
                <button type="button" class="btn btn-primary ml-auto nav-link mr-4" data-toggle="modal"
                    data-target="#loginModal">
                    Accedi
                </button>
                <button type="button" class="btn btn-primary nav-link" data-toggle="modal" data-target="#registerModal">
                    Registrati
                </button>
            </div>
        </nav>
    </header>
    <div style="text-align: center">
        <img src="img/background.png" width="100%">
    </div>

    <div style="margin:auto; text-align: center; margin-top: -40px; width: 60%" id="title">
        <div class="card float-center shadow">
            <div class="card-body">
                <h5 class="d-inline d-sm-none">APPRENDIAMOCI</h5>
                <h4 class="d-none d-sm-inline d-md-none">APPRENDIAMOCI</h4>
                <h3 class="d-none d-md-inline d-lg-none">APPRENDIAMOCI</h3>
                <h2 class="d-none d-lg-inline d-xl-none">APPRENDIAMOCI</h2>
                <h1 class="d-none d-xl-inline">APPRENDIAMOCI</h1>
            </div>
        </div>
    </div>
    <br><br>

    <main role="main">



        <br><br>

        <div class="container">

            <div class="featurette">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-12">
                        <button class="btn btn-block" style="height: 100%;">
                            <h1>
                                <i class="fas fa-question-circle fa-lg"></i>
                            </h1>
                        </button>
                    </div>
                    <div class="col">
                        <h3 class="featurette-heading">
                            Cos'è
                        </h3>
                        <p class="lead text-justify">
                            Apprendiamoci è un sito web che permette
                            a tutti e in particolare a studenti con problemi di apprendimento
                            di avere a disposizione documenti, presentazioni, simulazioni di test,
                            video, e molto altro messo a disposizione dai loro professori,
                            per facilitarte il loro apprendimento a casa.
                        </p>
                    </div>
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="featurette">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-12">
                        <button class="btn btn-block" style="height: 100%;">
                            <h1>
                                <i class="fas fa-mail-bulk fa-lg"></i>
                            </h1>
                        </button>
                    </div>
                    <div class="col">
                        <h3 class="featurette-heading">
                            Contattaci
                        </h3>
                        <p class="lead text-justify">
                            Se hai bisogno di informazioni o vuoi segnalare
                            malfunzionamenti scrivi all' email <a
                                href="mailto:curie@pec.provincia.tn.it">curie@pec.provincia.tn.it</a>
                            o chiama il numero <a href="#">0461 511397</a>
                        </p>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="featurette">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-12">
                        <button class="btn btn-block" style="height: 100%;">
                            <h1>
                                <i class="fas fa-user-tie fa-lg"></i>
                            </h1>
                        </button>
                    </div>
                    <div class="col">
                        <h3 class="featurette-heading">
                            Sei un professore?
                        </h3>
                        <p class="lead text-justify">
                            Effettua la registrazione utilizzando l'email istituzionale
                            <b>nome.cognome@scuole.provincia.tn.it</b>.
                        </p>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="featurette">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-12">
                        <button class="btn btn-block" style="height: 100%;">
                            <h1>
                                <i class="fab fa-github fa-lg"></i>
                            </h1>
                        </button>
                    </div>
                    <div class="col">
                        <h3 class="featurette-heading">
                            Lavora con noi
                        </h3>
                        <p class="lead text-justify">
                            Vuoi contribuire al nostro progetto ampliando le funzionalità
                            del sito? Puoi trovare la nostra repository su GitHub.
                        </p>
                    </div>
                </div>
            </div>
    </main>


    <!-- Modal login -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accedi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        <input type="submit" class="btn btn-primary" value="Accedi">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Modal register -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrati</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="Nome" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="surname" placeholder="Cognome" required>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        <input type="submit" class="btn btn-primary" value="Registrati">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
