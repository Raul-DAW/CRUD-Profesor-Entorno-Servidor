@extends('template.base')

@section('css')
    <link href="{{ asset('assets/style/show.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="container my-5">
    <div class="row justify-content-center g-4">

        <div class="col-12 col-md-5">
            <div class="card text-center p-4 h-100">

               

                <h4 class="card-title">
                    {{ $modulo->nombre . ' ' . $modulo->abreviatura }}
                </h4>

            </div>
        </div>


        <div class="col-12 col-md-5">
            <div class="card p-4 h-100">

                <h4 class="mb-4">Datos del alumno</h4>

                <p>
                    <strong>Horas:</strong>
                    {{ $modulo->horas }}
                </p>

                <p>
                    <strong>Creditos:</strong>
                    {{ $modulo->creditos }}
                </p>

                

                <div class="mt-auto pt-3">
                    <a href="{{ route('modulo.index') }}" class="btn btn-secondary">
                        Back
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection