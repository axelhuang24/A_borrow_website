<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 04/12/16
 * Time: 21:26
 */
namespace App\Http\Controllers;

use App\Article;
use Request;

use Auth;


class Search_Article extends Controller
{
    public function Search_Livres()
    {
        $Articles = Article::where('type', 'Livres') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Outils()
    {
        $Articles = Article::where('type', 'Outils') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Joujous()
    {
        $Articles = Article::where('type', 'Joujous') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Vetements()
    {
        $Articles = Article::where('type', 'Vetements') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Articles()
    {
        $Articles = Article::where('type', 'Articles') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Chaussures()
    {
        $Articles = Article::where('type', 'Chaussures') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Portables()
    {
        $Articles = Article::where('type', 'Portables') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Maquillages()
    {
        $Articles = Article::where('type', 'Maquillages') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

    public function Search_Sacs()
    {
        $Articles = Article::where('type', 'Sacs') -> get();
        /*dd($Livres);*/
        return view('ListPage',compact('Articles'));
    }

}
?>