<?php


namespace App\Repositories\impl;


use App\Electric;
use App\Repositories\itf\ElectricRepositoryInterface;

class ElectricRepository implements ElectricRepositoryInterface
{

    public function all()
    {
        return Electric::all();
    }

    public function findById($id)
    {
        return Electric::findOrFail($id);
    }

    public function update($electric,$column,$data)
    {
        return $electric->$column = $data;
    }

    public function create($electric, $request)
    {
        return $electric->update($request->all());
    }

    public function delete($id)
    {
        $electric = $this->findById($id);
        return $electric->delete();
    }

    public function store($electric)
    {
        return $electric->save();
    }

    public function findByRoomNumber($roomNumber)
    {
        return Electric::where('roomNumber', $roomNumber)->first();
    }

    public function getElectricActive()
    {
        return Electric::where('status', 'active')->get();
    }

    public function getElectricInactive()
    {
        return Electric::where('status', 'inactive')->get();
    }
}
