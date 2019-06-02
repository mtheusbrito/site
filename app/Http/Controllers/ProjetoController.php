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
        return view('projetos.index');
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
            $file = $request->file('imagem');
            $filename   = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('projetos', $filename);
        }

        $request = $this->service->store($request->all(), isset($path) ? $path : null);
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
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('projetos', $filename);
        }
        $request = $this->service->update($request->all(), $projeto_id, isset($path) ? $path : null);

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
