<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Profile;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function landing()
    {
        //
        $articles = Article::get();
        $about = Profile::get();
        $contact = Contact::get();
        return view('landingpage.home', compact('articles','about','contact'));

    }
    public function contactDesa()
    {
        //
        $contact = Contact::get();
        return view('landingpage.contact', compact('contact'));

    }
    public function articles()
    {
        //
        $articles = Article::get();
        return view('landingpage.article', compact('articles'));

    }
    public function articleDetail($id)
    {
        //
        $article_detail = Article::find($id);
        return view('landingpage.article_detail', compact('article_detail'));

    }
    public function gallery()
    {
        //
        $galleries = Gallery::get();
        return view('landingpage.galleries', compact('galleries'));

    }
    public function galleryDetail($id)
    {
        //
        $galleries_detail = Gallery::find($id);
        return view('landingpage.galleries_detail', compact('galleries_detail'));

    }
    public function about()
    {
        //
        return view('landingpage.about');

    }
}
