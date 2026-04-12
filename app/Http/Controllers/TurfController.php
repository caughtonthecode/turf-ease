<?php

namespace App\Http\Controllers;

use App\Http\Services\TurfModelService;
use Illuminate\Http\Request;

class TurfController extends Controller
{
    protected TurfModelService $turfModelService;

    public function __construct(TurfModelService $turfModelService)
    {
        $this->turfModelService = $turfModelService;
    }

    public function index()
    {
        $turfs = $this->turfModelService->all();

        $responseData = [
            'turfs' => $turfs,
        ];

        return view('pages.frontend.turf-list.index', $responseData);
    }

    public function create()
    {
        $turfs = $this->turfModelService->all();

        $responseData = [
            'turfs' => $turfs,
        ];

        return view('pages.frontend.turf-list.index', $responseData);
    }

    public function store(Request $request)
    {
        $turfs = $this->turfModelService->all();

        $responseData = [
            'turfs' => $turfs,
        ];

        return view('pages.frontend.turf-list.index', $responseData);
    }

    public function show($id)
    {
        $turf = $this->turfModelService->getTurf($id);

        $responseData = [
            'turf' => $turf,
        ];

        return view('pages.frontend.turf-details.index', $responseData);
    }

    public function edit($id)
    {
        $turf = $this->turfModelService->getTurf($id);

        $responseData = [
            'turf' => $turf,
        ];

        return view('pages.frontend.turf-details.index', $responseData);
    }

    public function update(Request $request, TurfModelService $turfModelService, $id)
    {
        $turf = $this->turfModelService->updateTurf($id, $request->all());

        $responseData = [
            'turf' => $turf,
        ];

        return view('pages.frontend.turf-details.index', $responseData);
    }

    public function destroy(Request $request, TurfModelService $turfModelService, $id)
    {
        $turf = $this->turfModelService->updateTurf($id, $request->all());

        $responseData = [
            'turf' => $turf,
        ];

        return view('pages.frontend.turf-details.index', $responseData);
    }

    public function success($id)
    {
        return view('pages.frontend.booking.success', ['id' => $id]);
    }

    public function bookingError($id)
    {
        return view('pages.frontend.booking.error', ['id' => $id]);
    }
}
