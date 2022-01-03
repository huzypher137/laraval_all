<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $post =array("hamza","bukenya",123);
        return view('pages.home')->with('post',$post);
    }

    public function about($id)
    {
        return $id;
    }

    public function posts()
    {
        return view('pages.posts');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
