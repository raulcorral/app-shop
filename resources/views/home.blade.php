@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="header header-primary text-center">
                            <h4>Inicio de sesión</h4>
                            <div class="social-line">
                                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                                   <button class="btn btn-primary">Alimentar</button>
                                </div>                       
                            </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
