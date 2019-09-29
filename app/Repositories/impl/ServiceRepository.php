<?php


namespace App\Repositories\impl;


use App\Repositories\itf\ServiceRepositoryInterface;
use App\Service;

class ServiceRepository implements ServiceRepositoryInterface
{

    public function all()
    {
        return Service::all();
    }

    public function findById($id)
    {
        return Service::findOrFail($id);
    }

    public function update($request, $id)
    {
        return Service::update($request->all());
    }

    public function create($obj, $request)
    {
        return Service::create($request->all());
    }

    public function delete($id)
    {
        $service = $this->findById($id);
        return $service->delete();
    }
}
