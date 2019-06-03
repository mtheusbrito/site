<?php
namespace App\Http\Controllers;

use App\Repositories\ProjetoRepository;
use App\Repositories\MembroRepository;

class SiteController extends Controller
{

    protected $projetoRepository;
    protected $membroRepository;



    public function __construct(ProjetoRepository $projetoRepository, MembroRepository $membroRepository)
    {
        $this->projetoRepository = $projetoRepository;
        $this->membroRepository = $membroRepository;
    }
    public function inicio()
    {
        return view('site.inicio');
    }

    public function empresa()
    {
        $membros = $this->membroRepository->all();
        return view('site.empresa', ['membros' => $membros]);
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
