<?php


namespace App\Repositories\itf;


interface ElectricRepositoryInterface
{
    public function store($electric);

    public function findByRoomNumber($roomNumber);

    public function getElectricActive();

    public function getElectricInactive();

    public function all();

    public function findById($id);

    public function update($electric,$column,$data);

    public function create($obj, $request);

    public function delete($id);

}
