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
        return view("admin.index", ['comics' => Comic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_path = null;
        if ($request->has('thumb')) {
            $file_path =  Storage::put('sabers_images', $request->thumb);
        }
        //dd($file_path);


        $NewComic = new Comic();
        $NewComic->name = $request->name;
        $NewComic->price = $request->price;
        $NewComic->thumb = $file_path;
        $NewComic->save();

        // POST/REDIRECT/GET
        return view('admin.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view("admin.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
