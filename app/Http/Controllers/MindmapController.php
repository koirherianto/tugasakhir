<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMindmapRequest;
use App\Http\Requests\UpdateMindmapRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MindmapRepository;
use Illuminate\Http\Request;
use Flash;

class MindmapController extends AppBaseController
{
    /** @var MindmapRepository $mindmapRepository*/
    private $mindmapRepository;

    public function __construct(MindmapRepository $mindmapRepo)
    {
        $this->mindmapRepository = $mindmapRepo;
    }

    /**
     * Display a listing of the Mindmap.
     */
    public function index(Request $request)
    {
        $mindmaps = $this->mindmapRepository->paginate(10);

        return view('mindmaps.index')
            ->with('mindmaps', $mindmaps);
    }

    /**
     * Show the form for creating a new Mindmap.
     */
    public function create()
    {
        return view('mindmaps.create');
    }

    /**
     * Store a newly created Mindmap in storage.
     */
    public function store(CreateMindmapRequest $request)
    {
        $input = $request->all();

        // return $input;

        $mindmap = $this->mindmapRepository->create($input);

        Flash::success('Mindmap saved successfully.');

        return redirect(route('mindmaps.index'));
    }

    /**
     * Display the specified Mindmap.
     */
    public function show($id)
    {
        $mindmap = $this->mindmapRepository->find($id);

        if (empty($mindmap)) {
            Flash::error('Mindmap not found');

            return redirect(route('mindmaps.index'));
        }

        return view('mindmaps.show')->with('mindmap', $mindmap);
    }

    /**
     * Show the form for editing the specified Mindmap.
     */
    public function edit($id)
    {
        $mindmap = $this->mindmapRepository->find($id);

        if (empty($mindmap)) {
            Flash::error('Mindmap not found');

            return redirect(route('mindmaps.index'));
        }

        return view('mindmaps.edit')->with('mindmap', $mindmap);
    }

    /**
     * Update the specified Mindmap in storage.
     */
    public function update($id, UpdateMindmapRequest $request)
    {
        $mindmap = $this->mindmapRepository->find($id);

        if (empty($mindmap)) {
            Flash::error('Mindmap not found');

            return redirect(route('mindmaps.index'));
        }

        $mindmap = $this->mindmapRepository->update($request->all(), $id);

        Flash::success('Mindmap updated successfully.');

        return redirect(route('mindmaps.index'));
    }

    /**
     * Remove the specified Mindmap from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mindmap = $this->mindmapRepository->find($id);

        if (empty($mindmap)) {
            Flash::error('Mindmap not found');

            return redirect(route('mindmaps.index'));
        }

        $this->mindmapRepository->delete($id);

        Flash::success('Mindmap deleted successfully.');

        return redirect(route('mindmaps.index'));
    }
}
