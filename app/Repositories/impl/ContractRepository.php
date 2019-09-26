<?php


namespace App\Repositories\impl;


use App\Contract;
use App\Repositories\itf\ContractRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ContractRepository implements ContractRepositoryInterface
{

    public function all()
    {
        return Contract::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function create($obj, $request)
    {
        return $obj->create($request->all());
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function createNewContract()
    {
        return new Contract();
    }
}
