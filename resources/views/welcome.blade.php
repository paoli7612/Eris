<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <title>Apprendiamoci</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
            <div style="width: 200px">
                <img src="/img/mcspada.png" alt="logo" width="100%">
                    @error('email')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
            </div>
            <div class="navbar-collapse navbar-nav">
                <button class="btn btn-primary text-white ml-auto nav-link active"
                    onclick="$('#dropdownEntra').toggle()">
                    <span class="d-sm">Entra</span>
                </button>
            </div>
            <div class="dropdown-menu dropdown-menu-right" id="dropdownEntra">
                <div class="p-3">
                    <form action="{{ route('login') }}" method="post"> @csrf
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
                <div class="dropdown-divider"></div>
                <div class="p-3">
                    <form action="{{ route('register') }}" method="post"> @csrf
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name">
                            <input name="surname" type="text" class="form-control" placeholder="Surname">
                            <input name="nickname" type="text" class="form-control" placeholder="Nickname">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Register">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <br><br>
    <main role="main">

        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="/img/background.png" alt="First slide" style="width: 100%">
                </div>
            </div>
        </div>

        <div style="margin:auto; text-align: center; margin-top: -40px; width: 60%">
            <div class="card float-center">
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
