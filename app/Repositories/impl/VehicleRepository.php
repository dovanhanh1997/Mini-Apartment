<?php


namespace App\Repositories\impl;


use App\Repositories\itf\VehicleRepositoryInterface;
use App\Vehicle;

class VehicleRepository implements VehicleRepositoryInterface
{

    public function all()
    {
        return Vehicle::all();
    }

    public function findById($id)
    {
        return Vehicle::find($id);
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function create($obj, $request)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}
