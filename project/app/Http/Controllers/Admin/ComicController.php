<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.comics.index", ['comics' => Comic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$data = $request->all();

        $validated = $request->validate([
            'title' => 'required|min:2|max:100',
            'thumb' => 'required',
            'price' => 'required',
        ], 
        [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.min' => 'Il titolo deve avere almeno 2 caratteri!',
            'title.max' => 'Il titolo può avere massimo 100 caratteri!',
            'thumb.required' => "L'immagine è obbligatoria!",
            'price.required' => 'Il prezzo è obbligatorio!',
        ]);

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $validated['thumb'] = $file_path;
        }

        $newComic = Comic::create($validated);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        //$data = $request->all();

        $validated = $request->validate([
            'title' => 'required|min:2|max:100',
            'thumb' => 'required',
            'price' => 'required',
        ]);

        if ($request->has('thumb') && $comic->thumb) {

            Storage::delete($comic->thumb);

            $newImageFile = $request->thumb;
            $path = Storage::put('comics_images', $newImageFile);
            $validated['thumb'] = $path;
        }


        $comic->update($validated);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', 'Welldone! Comic deleted successfully!');
    }
}
