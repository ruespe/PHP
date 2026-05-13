<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'user') {
            // Veu tots els posts però sense editar
            $posts = Post::with('user')->latest()->get();
        } elseif ($user->role === 'editor') {
            // Veu només els seus posts
            $posts = Post::with('user')->where('user_id', $user->id)->latest()->get();
        } else {
            // Admin veu tots
            $posts = Post::with('user')->latest()->get();
        }

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorizeEditorOrAdmin();
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorizeEditorOrAdmin();

        $validated = $request->validate([
            'titol'     => 'required|string|max:255',
            'contingut' => 'required|string',
        ]);

        Post::create([
            'titol'     => $validated['titol'],
            'contingut' => $validated['contingut'],
            'user_id'   => Auth::id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post creat correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorizeModify($post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorizeModify($post);

        $validated = $request->validate([
            'titol'     => 'required|string|max:255',
            'contingut' => 'required|string',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post actualitzat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorizeModify($post);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminat correctament.');
    }

    private function authorizeEditorOrAdmin(): void
    {
        $role = Auth::user()->role;
        if (!in_array($role, ['editor', 'admin'])) {
            abort(403, 'No tens permís per a aquesta acció.');
        }
    }

    private function authorizeModify(Post $post): void
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            return; // admin ho pot tot
        }
        if ($user->role === 'editor' && $post->user_id === $user->id) {
            return; // editor pot modificar els seus
        }
        abort(403, 'No tens permís per a aquesta acció.');
    }
}

