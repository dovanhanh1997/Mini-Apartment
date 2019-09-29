<?php


namespace App\Services\itf;


interface HistoryServiceInterface
{
    public function createElectricHistory($electric);

    public function all();

    public function update($request, $id);

    public function create($data);

    public function delete($id);

    public function show($id);
}
