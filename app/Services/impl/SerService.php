<?php


namespace App\Services\impl;


use App\Repositories\impl\ServiceRepository;
use App\Repositories\itf\ServiceRepositoryInterface;
use App\Services\itf\SerServiceInterface;

class SerService implements SerServiceInterface
{
    /**
     * @var ServiceRepositoryInterface
     */
    private $serviceRepository;

    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function all()
    {
        return $this->serviceRepository->all();
    }

    public function update($request, $id)
    {
        return $this->serviceRepository->update($request,$id);
    }

    public function create($request)
    {
        return $this->serviceRepository->create($request);
    }

    public function delete($id)
    {
        return $this->serviceRepository->delete($id);
    }

    public function show($id)
    {
        return $this->serviceRepository->findById($id);
    }

    public function findById($id)
    {
        return $this->serviceRepository->findById($id);
    }
}
