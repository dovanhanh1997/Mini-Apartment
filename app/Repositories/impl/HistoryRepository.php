<?php


namespace App\Repositories\impl;


use App\History;
use App\Repositories\itf\HistoryRepositoryInterface;

class HistoryRepository implements HistoryRepositoryInterface
{

    public function all()
    {
        return History::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($history,$column,$data)
    {
        return $history->$column = $data;
    }

    public function create($history,$column,$data)
    {
        return $history->$column = $data;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function store($history)
    {
        return $history->save();
    }

    public function createElectric($electric)
    {
        // TODO: Implement createElectric() method.
    }

}
