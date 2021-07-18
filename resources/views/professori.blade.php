@extends('layouts.app')

@section('content')
    <h1>Professori</h1>


    @foreach ($professori as $prof)
        <div class="col-xl-4 col-md-6 col-sm-12" name="docente" search="{{ $prof->id }}">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">
                    {{ $prof->complete_name() }}
                    <a class="float-right">
                        <i class="fas fa-user-graduate fa-lg"></i>
                    </a>
                </div>
                <div class="card-body">
                    <?php echo $docente['count']; ?>
                    Lezioni create
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <button class="btn bg-white btn-block"
                                onclick="window.location='../lezioni/?docente=<?php echo $docente['id']; ?>'"
                                <?php if ($docente['count'] == 0): ?>disabled="disabled" <?php endif; ?>>
                                Lezioni</button>
                        </div>
                        <?php if ($_SESSION['user_type'] == 'studente'): ?>
                        <div class="col">
                            <button class="btn bg-white btn-block" onclick="salvaDocente(this,<?php echo $docente['id']; ?>)">
                                <?php if ($docente['preferito']): ?>
                                <i class="fas fa-bookmark"></i>
                                <?php else: ?>
                                <i class="far fa-bookmark"></i>
                                <?php endif; ?>
                                Salva</button>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
