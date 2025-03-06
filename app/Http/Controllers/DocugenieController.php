<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;



class DocugenieController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showTelecharger(){
        return view('telecharger');
    }
    public function showArchive(){
        return view('archives');
    }
    public function showGeek(){
        return view('geek');
    }
    public function showContact(){
        return view('contact');
    }
    public function showRegistration(){
        return view('registration');
    }
    public function showCorrection(Request $request){
        $user = User::with('posts')
    ->when($request->search, fn($query, $search) => 
        $query->whereHas('posts', fn($q) => $q->where('libelle', 'LIKE', "%{$search}%"))
    )
    ->latest()
    ->paginate(20);

return view('correction', compact('user'));
    }
    public function showPost(){
        return view('showPost');
    }
    public function poster(Request $request){
        $request->validate([
            'libelle' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $path = $request->file('image')->store('images', 'public');
        $user = Auth::user();
        $post = Post::create([
            'user_id' => $user->id,
            'libelle' => $request->libelle,
            'image' => $path
        ]);

        return redirect()->route('correction')->with('success', 'Post publié avec succès!');
    }
}
