<?php
namespace App\Http\Controllers;

use App\Repositories\ProjetoRepository;

class SiteController extends Controller
{

    protected $projetoRepository;



    public function __construct(ProjetoRepository $projetoRepository)
    {
        $this->projetoRepository = $projetoRepository;
    }
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
        $projetos = $this->projetoRepository->paginate(3);
        return view('site.projetos', ['projetos' => $projetos]);
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
