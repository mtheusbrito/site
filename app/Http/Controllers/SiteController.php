<?php
namespace App\Http\Controllers;

use App\Repositories\ProjetoRepository;
use App\Repositories\MembroRepository;
use App\Repositories\SlideRepository;

class SiteController extends Controller
{

    protected $projetoRepository;
    protected $membroRepository;
    protected $slideRepository;



    public function __construct(ProjetoRepository $projetoRepository, MembroRepository $membroRepository, SlideRepository $slideRepository)
    {
        $this->projetoRepository = $projetoRepository;
        $this->membroRepository = $membroRepository;
        $this->slideRepository = $slideRepository;
    }
    public function inicio()
    {
        $slides = $this->slideRepository->all();
        return view('site.inicio', ['slides' => $slides]);
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
