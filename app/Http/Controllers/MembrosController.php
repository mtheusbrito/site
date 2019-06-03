<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MembroCreateRequest;
use App\Http\Requests\MembroUpdateRequest;
use App\Repositories\MembroRepository;
use Illuminate\Support\Facades\Response;
use App\Services\MembroService;
use App\Utils\FileUtils;

/**
 * Class MembrosController.
 *
 * @package namespace App\Http\Controllers;
 */
class MembrosController extends Controller
{

    protected $repository;
    protected $service;
    protected $fileUtils;

    public function __construct(MembroRepository $repository, MembroService $service, FileUtils $fileUtils)
    {
        $this->repository = $repository;
        $this->service = $service;
        $this->fileUtils = $fileUtils;
    }


    public function index()
    {

        return view('membros.index');
    }
    public function create()
    {
        return view('membros.create');
    }
    public function store(MembroCreateRequest $request)
    {
        // dd($request);
        if ($request->hasFile('image')) {
            $path = $this->fileUtils->upload($request->file('image'), 'membros');
            $request["avatar"] = $path;
        }

        $request = $this->service->store($request->all());
        $membro = $request['success'] ? $request['data'] : null;


        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('membros.index');
    }


    public function show($id)
    {
        $membro = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $membro,
            ]);
        }

        return view('membros.show', ['membro' => $membro]);
    }

    public function edit($id)
    {
        $membro = $this->repository->find($id);

        return view('membros.edit', ['membro' => $membro]);
    }


    public function update(MembroUpdateRequest $request, $membro_id)
    { 


        if ($request->hasFile('image')) {
            $path = $this->fileUtils->upload($request->file('image'), 'membros');
            $request["avatar"] = $path;
        }
        $request = $this->service->update($request->all(), $membro_id);

        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('membros.index');
    }



    public function destroy($membro_id)
    {
        return $this->service->destroy($membro_id);
    }

    public function paginate()
    {

        $membros = $this->repository->all();
        return Response::json($membros);
    }
}
