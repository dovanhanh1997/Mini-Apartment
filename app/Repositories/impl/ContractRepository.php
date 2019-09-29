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
        return Contract::findOrFail($id);
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
        $contract = $this->findById($id);
        return $contract->delete();
    }

    public function createNewContract()
    {
        return new Contract();
    }

    public function getActive()
    {
        return Contract::where('contractStatus', 'Active')->get();
    }

    public function getInactive()
    {
        return Contract::where('contractStatus', 'Inactive')->get();
    }
}
