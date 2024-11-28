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
        if (app()->getLocale() == 'it'){
            $messageAccepted= 'Hai accettato l\'articolo';
        } else if (app()->getLocale() == 'en') {
            $messageAccepted= 'Article accepted';
        } else if (app()->getLocale() == 'es'){
            $messageAccepted= 'Aceptaste el artículo ';
        };

        return redirect()->back()->with('message', "$messageAccepted $article->title");
    }

    public function reject (Article $article) {
        $article->setAccepted(false);
        if (app()->getLocale() == 'it'){
            $messageReject= 'Hai rifiutato l\'articolo';
        } else if (app()->getLocale() == 'en') {
            $messageReject= 'Article rejected';
        } else if (app()->getLocale() == 'es'){
            $messageReject= 'Artículo rechazado ';
        };
        return redirect()->back()->with('message', "$messageReject $article->title");
    }
    
    // funzioni per la richiesta/accettazione mail
    public function becomeRevisor() {
        Mail::to('admin@bazaar.shop')->send(new BecomeRevisor(Auth::user()));
        if (app()->getLocale() == 'it'){
            $messageEmailRevisor= 'Complimenti! Hai chiesto di diventare revisor. Attendi la nostra risposta';
        } else if (app()->getLocale() == 'en') {
            $messageEmailRevisor= 'Congratulations! You have asked to become a reviewer. Wait for our reply';
        } else if (app()->getLocale() == 'es'){
            $messageEmailRevisor= 'Felicitaciones! Has solicitado ser revisor. Espera nuestra respuesta';
        };
        
        return redirect()->route('homepage')->with('message', '$messageEmailRevisor');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor',['email'=>$user->email]);
        return redirect()->back();
    }

}
