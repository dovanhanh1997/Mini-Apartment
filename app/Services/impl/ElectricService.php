<?php


namespace App\Services\impl;


use App\Electric;
use App\Repositories\itf\ElectricRepositoryInterface;
use App\Services\itf\ElectricServiceInterface;

class ElectricService implements ElectricServiceInterface
{
    /**
     * @var ElectricRepositoryInterface
     */
    private $electricRepository;

    public function __construct(ElectricRepositoryInterface $electricRepository)
    {
        $this->electricRepository = $electricRepository;
    }

    public function all()
    {
        return $this->electricRepository->all();
    }

    public function update($request, $id)
    {
        $electric = $this->electricRepository->findById($id);
        $column = ['previousMonth', 'currentMonth', 'diff', 'totalPrice', 'updated_at'];
        $diff = $request->currentMonth - $electric->currentMonth;
        $totalPrice = 4000 * $diff;
        $this->electricRepository->update($electric, $column[0], $electric->currentMonth);
        $this->electricRepository->update($electric, $column[1], $request->currentMonth);
        $this->electricRepository->update($electric, $column[2], $diff);
        $this->electricRepository->update($electric, $column[3], $totalPrice);
        $this->electricRepository->update($electric, $column[4], date(('y-m-d')));
        return $this->electricRepository->store($electric);
    }

    public function create($request)
    {
        $electric = new Electric();
        $this->electricRepository->create($electric, $request);
        return $this->electricRepository->store($electric);
    }

    public function delete($id)
    {
        return $this->electricRepository->delete($id);
    }

    public function show($id)
    {
        return $this->electricRepository->findById($id);
    }

    public function findByRoomNumber($roomNumber)
    {
        return $this->electricRepository->findByRoomNumber($roomNumber);
    }

    public function getElectricActive()
    {
        return $this->electricRepository->getElectricActive();
    }

    public function getElectricInactive()
    {
        return $this->electricRepository->getElectricInactive();
    }

    public function findById($id)
    {
        return $this->electricRepository->findById($id);
    }
}
