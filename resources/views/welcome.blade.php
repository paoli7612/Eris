<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8" />
        <title>Apprendiamoci</title>

        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
                <div style="width: 200px">
                    <img src="img/mcspada.png" alt="logo" width="100%">
                </div>
                <div class="navbar-collapse navbar-nav">
                    <button class="btn btn-primary text-white ml-auto nav-link active"
                        onclick="$('#dropdownEntra').toggle()">
                        <span class="d-sm">Accedi</span>
                    </button>
                </div>
                <div class="dropdown-menu dropdown-menu-right" id="dropdownEntra">
                    <a class="dropdown-item" href="login">Accedi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="register">Registrati</a>
                </div>
            </nav>
        </header>
        <br><br>
        <main role="main">

            <div style="text-align: center">
                <img src="img/background.png" width="100%">
            </div>

            <div style="margin:auto; text-align: center; margin-top: -40px; width: 60%">
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
    </body>
</html>
