<?php

namespace App\Http\Controllers;

use App\Models\Conversaciones;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ConversacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ConversacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $conversaciones = Conversaciones::paginate();

        return view('conversacione.index', compact('conversaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $conversaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $conversacione = new Conversaciones();

        return view('conversacione.create', compact('conversacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConversacioneRequest $request): RedirectResponse
    {
        Conversaciones::create($request->validated());

        return Redirect::route('conversaciones.index')
            ->with('success', 'Conversacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $conversacione = Conversaciones::find($id);

        return view('conversacione.show', compact('conversacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $conversacione = Conversaciones::find($id);

        return view('conversacione.edit', compact('conversacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConversacioneRequest $request, Conversaciones $conversacione): RedirectResponse
    {
        $conversacione->update($request->validated());

        return Redirect::route('conversaciones.index')
            ->with('success', 'Conversacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Conversaciones::find($id)->delete();

        return Redirect::route('conversaciones.index')
            ->with('success', 'Conversacione deleted successfully');
    }
}
