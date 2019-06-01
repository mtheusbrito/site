<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Requests\ProjetoCreateRequest;
use App\Repositories\ProjetoRepository;
use App\Services\ProjetoService;
use Illuminate\Support\Facades\Response;
use App\Requests\ProjetoUpdateRequest;

class ProjetoController extends Controller
{

    protected $repository;
    protected $service;


    public function __construct(ProjetoRepository $repository, ProjetoService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }
    public function index()
    {
        $projetos = $this->repository->all();
        return view(
            'projetos.index',
            ['projetos' => $projetos]
        );
    }

    public function paginate()
    {
        $projetos = $this->repository->all();

        return Response::json($projetos);
    }

    public function show()
    { }

    public function create()
    {
        return view('projetos.create');
    }
    public function store(ProjetoCreateRequest $request)
    {

        if ($request->hasFile('imagem')) {

            $name = str_random(28);
            $extenstion = $request->imagem->extension();

            $nameFile = "{$name}.{$extenstion}";
            // dd($nameFile);
            $upload = $request->imagem->storeAs('projetos', $nameFile);

            //setando link
            $request['imagem'] = $nameFile;


            // dd($request['imagem']);

            // if (!$upload)
            //     return redirect()
            //         ->back()
            //         ->with('erro', 'Falha ao fazer upload da imagem');
        }



        $request = $this->service->store($request->all());
        $projeto = $request['success'] ? $request['data'] : null;


        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('projetos.index');
    }
    public function edit($projeto_id)
    {

        $projeto = $this->repository->find($projeto_id);

        return view('projetos.edit', ['projeto' => $projeto]);
    }
    public function update(ProjetoUpdateRequest $request, $projeto_id)
    {
        $request = $this->service->update($request->all(), $projeto_id);

        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('projetos.index');
    }
    public function destroy($projeto_id)
    {
        return $this->service->destroy($projeto_id);
    }
}
