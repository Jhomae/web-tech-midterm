<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRiceInfoInPhilRequest;
use App\Http\Requests\UpdateRiceInfoInPhilRequest;
use App\Repositories\RiceInfoInPhilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RiceInfoInPhilController extends AppBaseController
{
    /** @var  RiceInfoInPhilRepository */
    private $riceInfoInPhilRepository;

    public function __construct(RiceInfoInPhilRepository $riceInfoInPhilRepo)
    {
        $this->riceInfoInPhilRepository = $riceInfoInPhilRepo;
    }

    /**
     * Display a listing of the RiceInfoInPhil.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $riceInfoInPhils = $this->riceInfoInPhilRepository->all();

        return view('rice_info_in_phils.index')
            ->with('riceInfoInPhils', $riceInfoInPhils);
    }

    /**
     * Show the form for creating a new RiceInfoInPhil.
     *
     * @return Response
     */
    public function create()
    {
        return view('rice_info_in_phils.create');
    }

    /**
     * Store a newly created RiceInfoInPhil in storage.
     *
     * @param CreateRiceInfoInPhilRequest $request
     *
     * @return Response
     */
    public function store(CreateRiceInfoInPhilRequest $request)
    {
        $input = $request->all();

        $riceInfoInPhil = $this->riceInfoInPhilRepository->create($input);

        Flash::success('Rice Info In Phil saved successfully.');

        return redirect(route('riceInfoInPhils.index'));
    }

    /**
     * Display the specified RiceInfoInPhil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riceInfoInPhil = $this->riceInfoInPhilRepository->find($id);

        if (empty($riceInfoInPhil)) {
            Flash::error('Rice Info In Phil not found');

            return redirect(route('riceInfoInPhils.index'));
        }

        return view('rice_info_in_phils.show')->with('riceInfoInPhil', $riceInfoInPhil);
    }

    /**
     * Show the form for editing the specified RiceInfoInPhil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riceInfoInPhil = $this->riceInfoInPhilRepository->find($id);

        if (empty($riceInfoInPhil)) {
            Flash::error('Rice Info In Phil not found');

            return redirect(route('riceInfoInPhils.index'));
        }

        return view('rice_info_in_phils.edit')->with('riceInfoInPhil', $riceInfoInPhil);
    }

    /**
     * Update the specified RiceInfoInPhil in storage.
     *
     * @param int $id
     * @param UpdateRiceInfoInPhilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRiceInfoInPhilRequest $request)
    {
        $riceInfoInPhil = $this->riceInfoInPhilRepository->find($id);

        if (empty($riceInfoInPhil)) {
            Flash::error('Rice Info In Phil not found');

            return redirect(route('riceInfoInPhils.index'));
        }

        $riceInfoInPhil = $this->riceInfoInPhilRepository->update($request->all(), $id);

        Flash::success('Rice Info In Phil updated successfully.');

        return redirect(route('riceInfoInPhils.index'));
    }

    /**
     * Remove the specified RiceInfoInPhil from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riceInfoInPhil = $this->riceInfoInPhilRepository->find($id);

        if (empty($riceInfoInPhil)) {
            Flash::error('Rice Info In Phil not found');

            return redirect(route('riceInfoInPhils.index'));
        }

        $this->riceInfoInPhilRepository->delete($id);

        Flash::success('Rice Info In Phil deleted successfully.');

        return redirect(route('riceInfoInPhils.index'));
    }
}
