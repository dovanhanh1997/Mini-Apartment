<?php


namespace App\Services\impl;


use App\Repositories\itf\VehicleRepositoryInterface;
use App\Services\itf\VehicleServiceInterface;

class VehicleService implements VehicleServiceInterface
{
    /**
     * @var VehicleRepositoryInterface
     */
    private $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {

        $this->vehicleRepository = $vehicleRepository;
    }

    public function all()
    {
        return $this->vehicleRepository->all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        return $this->vehicleRepository->delete($id);
    }
}
