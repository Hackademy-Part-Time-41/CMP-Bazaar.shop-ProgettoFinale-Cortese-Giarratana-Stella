<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    // funzioni per il revisore
    public function index () {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view ('revisor.index', compact('article_to_check'));
    }

    public function accept (Article $article) {
        $article->setAccepted(true);
        return redirect()->back()->with('message', "Hai accettato l'articolo $article->title");
    }

    public function reject (Article $article) {
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'articolo $article->title");
    }
    
    // funzioni per la richiesta/accettazione mail
    public function becomeRevisor() {
        Mail::to('admin@bazaar.shop')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Complimenti! Hai chiesto di diventare revisor. Attendi la nostra risposta');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor',['email'=>$user->email]);
        return redirect()->back();
    }

}
