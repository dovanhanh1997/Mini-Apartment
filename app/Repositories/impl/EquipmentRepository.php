<?php


namespace App\Repositories\impl;


use App\Equipment;
use App\Repositories\itf\EquipmentRepositoryInterface;

class EquipmentRepository implements EquipmentRepositoryInterface
{

    public function all()
    {
        return Equipment::all();
    }

    public function findById($id)
    {
        return Equipment::findOrFaild($id);
    }

    public function update($request, $id)
    {
        return $this->findById($id)->update($request->all());
    }

    public function create($obj, $request)
    {
        return $obj->update($request->all());
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}
