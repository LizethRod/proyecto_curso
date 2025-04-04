<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = session()->get('posts', []); // Obtener los posts de la sesión
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = session()->get('posts', []);

        $id = count($posts) + 1;
        $titulo = $request->input('titulo');
        $contenido = $request->input('contenido');

        $posts[] = [
            'id' => $id,
            'titulo' => $titulo,
            'contenido' => $contenido,
        ];

        session()->put('posts', $posts);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = session()->get('posts', []);
        $post = collect($posts)->firstWhere('id', $id);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
