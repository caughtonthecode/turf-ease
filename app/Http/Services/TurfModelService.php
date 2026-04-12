<?php

namespace App\Http\Services;

use App\Http\Services\Core\BaseModelService;
use App\Models\Turf;

class TurfModelService extends BaseModelService
{
    public function model()
    {
        return Turf::class;
    }

    // Store Turf
    public function createTurf(array $data)
    {
        return $this->model()::create($data);
    }

    // Update Turf
    public function updateTurf($id, array $data)
    {
        return $this->model()::where('id', $id)->update($data);
    }

    // Delete Turf
    public function deleteTurf($id)
    {
        return $this->model()::where('id', $id)->delete();
    }

    // Get All Turfs
    public function getTurfs()
    {
        return $this->model()::all();
    }

    // Get Unbooked Turfs
    public function getAvailableTurfs()
    {
        return $this->model()::where('is_booked', false)->get();
    }

    // Get Single Turf
    public function getTurf($id)
    {
        return $this->model()::where('id', $id)->first();
    }

    // Get Turfs By Category
    public function getTurfsByCategory($category)
    {
        return $this->model()::where('category', $category)->get();
    }

    // Get Turfs By Location
    public function getTurfsByLocation($location)
    {
        return $this->model()::where('location', $location)->get();
    }

    // Get Turfs By Price
    public function getTurfsByPrice($price)
    {
        return $this->model()::where('price', $price)->get();
    }
}
