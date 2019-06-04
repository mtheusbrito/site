<?php

namespace App\Http\Controllers;

use App\Repositories\SlideRepository;
use App\Services\SlideService;
use App\Utils\FileUtils;
use App\Http\Requests\SlideCreateRequest;
use App\Http\Requests\SlideUpdateRequest;
use Illuminate\Support\Facades\Response;

class SlidesController extends Controller
{

    protected $repository;
    protected $service;
    protected $fileUtils;


    public function __construct(SlideRepository $repository, SlideService $service, FileUtils $fileUtils)
    {
        $this->repository = $repository;
        $this->service = $service;
        $this->fileUtils = $fileUtils;
    }

    public function index()
    {
        return view('slides.index');
    }

    public function create()
    {
        return view('slides.create');
    }

    public function store(SlideCreateRequest $request)
    {

        if ($request->hasFile('image')) {
            $path = $this->fileUtils->upload($request->file('image'), 'slides');
            $request['imagem'] = $path;
        }

        $request = $this->service->store($request->all());
        $slide = $request['success'] ? $request['data'] : null;

        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('slides.index');
    }

    public function edit($slide_id)
    {
        $slide = $this->repository->find($slide_id);

        return view('slides.edit', ['slide' => $slide]);
    }

    public function update(SlideUpdateRequest $request, $slide_id)
    {
        if ($request->hasFile('image')) {
            $path = $this->fileUtils->upload($request->file('image'), 'slides');
            $request["imagem"] = $path;
        }
        $request = $this->service->update($request->all(), $slide_id);

        session()->flash('success', [
            'success' => $request['success'],
            'messages' => $request['messages']
        ]);
        return redirect()->route('slides.index');
    }

    public function destroy($slide_id)
    {
        return $this->service->destroy($slide_id);
    }

    public function paginate()
    {
        $slides = $this->repository->all();

        return Response::json($slides);
    }
}
