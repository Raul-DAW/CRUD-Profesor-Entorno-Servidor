@extends('template.base')

@section('content')

<div class="container mt-4">

    <div class="mb-4 text-end">
        <a href="{{ route('modulo.create') }}" class="btn btn-secondary">
            Create pupil
        </a>
    </div>

    <h2>Listado de modulos</h2>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="mb-3">
                <table class="table table-hover">

                    @foreach($modulos as $modulo)

                    <tr>
                        <td>{{ $modulo->id }}</td>
                        <td>{{ $modulo->nombre }}</td>
                        <td>{{ $modulo->abreviatura }}</td>
                        <td>{{ $modulo->horas }}</td>
                        <td>{{ $modulo->creditos }}</td>

                      
<td class="text-nowrap">
    <div class="d-flex align-items-center justify-content-center gap-2">

        <a href="{{ route('modulo.show', $modulo) }}"
           class="btn btn-secondary btn-sm">
            View
        </a>

        <a href="{{ route('modulo.edit', $modulo) }}"
           class="btn btn-secondary btn-sm">
            Edit
        </a>

        <form
            data-message="{{ $modulo->abreviatura . ', ' . $modulo->nombre }}"
            class="confirm-dialog m-0"
            action="{{ route('modulo.destroy', $modulo) }}"
            method="POST"
        >
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-secondary btn-sm">
                Delete
            </button>
        </form>

    </div>
</td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')

<script>
document.querySelectorAll('form.confirm-dialog').forEach(
    form => {
        form.addEventListener('submit', e => {
            const message = '¿Seguro que quieres borrar el modulo ' + form.dataset.message + '?';

            if (!confirm(message)) {
                e.preventDefault();
            }
        });
    }
);
</script>

@endsection