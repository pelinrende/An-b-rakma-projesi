<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if ($request->password == env('ADMIN_PASSWORD')) {

            session(['admin' => true]);

            return redirect('/dashboard');
        }

        return back()->with('error','Şifre yanlış.');
    }

    public function dashboard()
    {
        if(!session('admin')){
            return redirect('/admin');
        }

        $memories = Memory::latest()->get();

        return view('admin.dashboard',compact('memories'));
    }

    public function logout()
    {
        session()->forget('admin');

        return redirect('/admin');
    }
    public function destroy(Memory $memory)
{
    if (!session('admin')) {
        return redirect('/admin');
    }

    Storage::disk('public')->delete($memory->photo_path);

    $memory->delete();

    return redirect('/dashboard')->with('success', 'Anı silindi.');
}
}
