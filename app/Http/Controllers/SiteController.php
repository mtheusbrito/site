<?php
namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function inicio()
    {
        return view('site.inicio');
    }

    public function empresa()
    {
        return view('site.empresa');
    }
    public function projetos()
    {
        return view('site.projetos');
    }
    public function solucoes()
    {
        return view('site.solucoes');
    }
    public function contato()
    {
        return view('site.contato');
    }
}
