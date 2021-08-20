@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card card-stats py-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category mb-3">{{ App\Models\Course::first()->name }}</p>
                                </div>
                                <p class="m-0 item-center">La prima guerra mondiale</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
