@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Eris</h1>
                <p class="lead text-muted">
                    Eris has the capacity to help plan, organize, and manage resource tools and develop resource estimates.
                    Depending on the sophistication of the software, it can manage estimation and planning, scheduling,
                    cost control and budget management, resource allocation, collaboration software,
                    communication, decision-making, quality management, time management and
                    documentation or administration systems.
                </p>
            </div>
        </section>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Privacy</h2>
                    <p>I dati personali di ogni studente rimangono nascosti agli altri stuend. I professoi vedono solo il numero di matricola</p>
                </div>
                <div class="col-md-4">
                    <h2>Cloud</h2>
                    <p>I file dei materiali caricati dai professori verranno salvati nella piattaforma senza legame con le macchine degli utenti </p>
                </div>
                <div class="col-md-4">
                    <h2>Ricerca</h2>
                    <p>Piattaforma ottimizzata per la ricerca delle lezioni anche in base ai tag selezionati dal professore.</p>
                </div>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b7c4e3dd2%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b7c4e3dd2%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7265625%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>

    </main>
@endsection
