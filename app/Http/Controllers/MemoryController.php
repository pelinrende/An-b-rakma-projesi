<?php

namespace App\Http\Controllers;
use App\Models\Memory;
use Illuminate\Http\Request;

class MemoryController extends Controller
{
    public function index()
{
    $totalMemories = Memory::count();

    return view('welcome', compact('totalMemories'));
}

    public function create()
    {
        return view('create');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'message' => 'nullable|string',
        'photo' => 'required|image|max:5120',
        'is_public' => 'required|boolean',
    ]);

    $path = $request->file('photo')->store('memories', 'public');

    Memory::create([
        'name' => $request->name,
        'message' => $request->message,
        'photo_path' => $path,
        'is_public' => $request->is_public,
    ]);

   return redirect('/tesekkurler');
}

    public function gallery()
{
    $memories = Memory::where('is_public', true)
        ->latest()
        ->get();

    return view('gallery', compact('memories'));
}
public function thanks()
{
    return view('thanks');
}

public function admin()
{
    $memories = Memory::latest()->get();

    return view('admin', compact('memories'));
}
}
