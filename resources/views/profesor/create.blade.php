@extends('template.base')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4">Crear Profesor</h2>

            <form action="{{ route('profesor.store') }}" method="post">
                @csrf
                /*Medida de seguridad que se usa con todas las rutas que no sean */

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Nombre:
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                        maxlength="100"
                        placeholder="Introduce el nombre del profesor"
                        required>
                </div>

                {{-- Apellidos --}}
                <div class="mb-3">
                    <label for="apellido" class="form-label">
                        Apellidos:
                    </label>

                    <input
                        type="text"
                        id="apellido"
                        name="apellido"
                        class="form-control"
                        maxlength="130"
                        placeholder="Introduce los apellidos del profesor"
                        required>
                </div>

                {{-- Especialidad --}}
                <div class="mb-3">
                    <label for="especialidad" class="form-label">
                        Especialidad:
                    </label>

                    <input
                        type="text"
                        id="especialidad"
                        name="especialidad"
                        class="form-control"
                        maxlength="130"
                        placeholder="Introduce la especialidad del profesor"
                        required>
                </div>

                {{-- Fecha de alta --}}
                <div class="mb-3">
                    <label for="fchalt" class="form-label">
                        Fecha de alta:
                    </label>

                    <input
                        type="date"
                        id="fchalt"
                        name="fchalt"
                        class="form-control">
                </div>

                {{-- Salario --}}
                <div class="mb-3">
                    <label for="salario" class="form-label">
                        Salario:
                    </label>

                    <input
                        type="number"
                        id="salario"
                        name="salario"
                        class="form-control"
                        min="0"
                        step="0.01"
                        placeholder="Introduce el salario">
                </div>

                {{-- Botón --}}
                <button type="submit" class="btn btn-primary">
                    Crear Profesor
                </button>

            </form>

        </div>
    </div>
</div>

@endsection