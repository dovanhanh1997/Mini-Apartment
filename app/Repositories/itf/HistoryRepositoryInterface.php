<?php


namespace App\Repositories\itf;


interface HistoryRepositoryInterface
{
    public function all();

    public function findById($id);

    public function update($history,$column,$data);

    public function create($history,$column,$data);

    public function delete($id);

    public function store($history);

    public function createElectric($electric);
}
