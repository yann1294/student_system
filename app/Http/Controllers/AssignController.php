<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssignRequest;
use App\Http\Requests\UpdateAssignRequest;
use App\Repositories\AssignRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssignController extends AppBaseController
{
    /** @var  AssignRepository */
    private $assignRepository;

    public function __construct(AssignRepository $assignRepo)
    {
        $this->assignRepository = $assignRepo;
    }

    /**
     * Display a listing of the Assign.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assigns = $this->assignRepository->all();

        return view('assigns.index')
            ->with('assigns', $assigns);
    }

    /**
     * Show the form for creating a new Assign.
     *
     * @return Response
     */
    public function create()
    {
        return view('assigns.create');
    }

    /**
     * Store a newly created Assign in storage.
     *
     * @param CreateAssignRequest $request
     *
     * @return Response
     */
    public function store(CreateAssignRequest $request)
    {
        $input = $request->all();

        $assign = $this->assignRepository->create($input);

        Flash::success('Assign saved successfully.');

        return redirect(route('assigns.index'));
    }

    /**
     * Display the specified Assign.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assign = $this->assignRepository->find($id);

        if (empty($assign)) {
            Flash::error('Assign not found');

            return redirect(route('assigns.index'));
        }

        return view('assigns.show')->with('assign', $assign);
    }

    /**
     * Show the form for editing the specified Assign.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assign = $this->assignRepository->find($id);

        if (empty($assign)) {
            Flash::error('Assign not found');

            return redirect(route('assigns.index'));
        }

        return view('assigns.edit')->with('assign', $assign);
    }

    /**
     * Update the specified Assign in storage.
     *
     * @param int $id
     * @param UpdateAssignRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssignRequest $request)
    {
        $assign = $this->assignRepository->find($id);

        if (empty($assign)) {
            Flash::error('Assign not found');

            return redirect(route('assigns.index'));
        }

        $assign = $this->assignRepository->update($request->all(), $id);

        Flash::success('Assign updated successfully.');

        return redirect(route('assigns.index'));
    }

    /**
     * Remove the specified Assign from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assign = $this->assignRepository->find($id);

        if (empty($assign)) {
            Flash::error('Assign not found');

            return redirect(route('assigns.index'));
        }

        $this->assignRepository->delete($id);

        Flash::success('Assign deleted successfully.');

        return redirect(route('assigns.index'));
    }
}
