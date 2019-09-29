<?php


namespace App\Services\impl;


use App\Equipment;
use App\Repositories\itf\EquipmentRepositoryInterface;
use App\Services\itf\EquipmentServiceInterface;

class EquipmentService implements EquipmentServiceInterface
{
    /**
     * @var EquipmentRepositoryInterface
     */
    private $equipmentRepository;

    public function __construct(EquipmentRepositoryInterface $equipmentRepository)
    {
        $this->equipmentRepository = $equipmentRepository;
    }

    public function findById($id)
    {
        return $this->equipmentRepository->findById($id);
    }

    public function all()
    {
        return $this->equipmentRepository->all();
    }

    public function update($request, $id)
    {
        return $this->equipmentRepository->update($request,$id);
    }

    public function create($request)
    {
        $equipment = new Equipment();
        return $this->equipmentRepository->create($equipment,$request);
    }

    public function delete($id)
    {
        return $this->equipmentRepository->delete($id);
    }

    public function show($id)
    {

    }
}
