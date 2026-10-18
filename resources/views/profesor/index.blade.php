@extends('template.base')

@section('title')
ProfesorDB
@endsection

@section('content')

<div class="container mt-4">

    <div class="mb-4 text-end">
        <a href="{{ route('profesor.create') }}" class="btn btn-secondary">
            Create profesor
        </a>
    </div>

    <h2>Listado de profesores</h2>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="mb-3">
                <table class="table table-hover">

                    @foreach($profesor as $profesor)

                    <tr>
                        <td>{{ $profesor->id }}</td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->apellido }}</td>
                        <td>{{ $profesor->especialidad }}</td>
                        <td>{{ $profesor->fchalt }}</td>
                        <td>{{ $profesor->salario }}</td>

                        <td>
                            <a href="{{ route('profesor.show', $profesor) }}" class="btn btn-secondary">
                                View
                            </a>

                            <a href="{{ route('profesor.edit', $profesor) }}" class="btn btn-secondary">
                                Edit
                            </a>

                            <form
                                action="{{ route('profesor.destroy', $profesor) }}"
                                method="post"
                                style="display:inline">

                                @csrf
                                @method('delete')

                                <input
                                    type="submit"
                                    value="Delete"
                                    class="btn btn-secondary">
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>
    </div>

</div>

@endsection









{{--
@extends('template.base')

@section('title')
GitHub Project
@endsection

@section('content')

<div class="container d-flex align-items-center flex-column">

    <img class="masthead-avatar mb-5"
         src="{{ asset('assets/img/avataaars.svg') }}"
         alt="..." />

    <h1 class="masthead-heading text-uppercase mb-0">
        Start Bootstrap
    </h1>

    <div class="divider-custom divider-light">

        <div class="divider-custom-line"></div>

        <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
        </div>

        <div class="divider-custom-line"></div>

    </div>

    <p class="masthead-subheading font-weight-light mb-0">
        Graphic Artist - Web Designer - Illustrator
    </p>

</div>

@endsection
--}}