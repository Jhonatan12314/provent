@extends('admin/layout')

@section('title', 'Administrador')

@section('content')

<main id="content">
    <div id="page-content">
        <div class="row section-header">
            <h4 class="page-title">Bienvenido</h4>
        </div>
        <div class=" row content-container general">
            <div class="col s12 m3">
                <a href="{{url('admin/news')}}">
                    <div class="card grey darken-4">
                        <div class="card-content white-text">
                            <span class="card-title"><i class="zmdi zmdi-globe-alt"></i> NEWS</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m3">
            <a href="{{url('admin/films')}}">
                <div class="card grey darken-4">
                    <div class="card-content white-text">
                        <span class="card-title"><i class="zmdi zmdi-movie"></i> FILMS</span>
                    </div>
                </div>
                </a>
            </div>
            <div class="col s12 m3">
            <a href="{{url('admin/gallery')}}">
                <div class="card grey darken-4">
                    <div class="card-content white-text">
                        <span class="card-title"><i class="zmdi zmdi-camera"></i> GALLERY</span>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</main>


@endsection
