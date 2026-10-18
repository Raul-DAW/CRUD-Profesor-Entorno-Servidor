<?php
namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfesorController extends Controller
{
    public function create(): View {
        return view('profesor.create', []);
    }

    public function destroy(Profesor $profesor): RedirectResponse {
        $profesor->delete();

        return redirect()->route('profesor.index');
    }

    public function edit(Profesor $profesor): View {
        return view('profesor.edit', ['profesor' => $profesor]);
    }

    public function index(): View {
        $profesor = Profesor::all();

        return view('profesor.index', ['profesor' => $profesor]);
    }

    public function show(Profesor $profesor): View {
        return view('profesor.show', ['profesor' => $profesor]);
    }

   public function store(Request $request)
{
    $profesor = new Profesor($request->all());

    $profesor->save();

    return redirect()->route('profesor.index');
}

    public function update(Request $request, Profesor $profesor): RedirectResponse {
        $profesor->update($request->all());

        return redirect()->route('profesor.index');
    }
}










































//Inicialmente tenía esto
// namespace App\Http\Controllers;

// use App\Models\Profesor;
// use Illuminate\Http\Request;

// class ProfesorController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Profesor $profesor)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Profesor $profesor)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Profesor $profesor)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Profesor $profesor)
//     {
//         //
//     }
// }
