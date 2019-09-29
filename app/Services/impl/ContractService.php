<?php


namespace App\Services\impl;


use App\Repositories\itf\ContractRepositoryInterface;
use App\Services\itf\ContractServiceInterface;

class ContractService implements ContractServiceInterface
{
    /**
     * @var ContractRepositoryInterface
     */
    private $contractRepository;

    public function __construct(ContractRepositoryInterface $contractRepository)
    {
        $this->contractRepository = $contractRepository;
    }

    public function all()
    {
        return $this->contractRepository->all();
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
        $contract = $this->contractRepository->createNewContract();
        $this->contractRepository->create($contract,$request);
    }

    public function delete($id)
    {
        return $this->contractRepository->delete($id);
    }

    public function getActive(){
        return $this->contractRepository->getActive();
    }

    public function getInactive(){
        return $this->contractRepository->getInactive();
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }
}
