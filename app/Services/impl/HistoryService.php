<?php


namespace App\Services\impl;


use App\History;
use App\Repositories\itf\HistoryRepositoryInterface;
use App\Services\itf\HistoryServiceInterface;

class HistoryService implements HistoryServiceInterface
{
    /**
     * @var HistoryRepositoryInterface
     */
    private $historyRepository;

    public function __construct(HistoryRepositoryInterface $historyRepository)
    {
        $this->historyRepository = $historyRepository;
    }

    public function all()
    {
        return $this->historyRepository->all();
    }

    public function update($request, $id)
    {
//        return $this->historyRepository->update()
    }

    public function create($data)
    {
        $history = new History();
        $column = ['service_id', 'roomNumber', 'date', 'diff', 'totalPrice'];
        $this->historyRepository->create($history, $column[0], $data['service_id']);
        $this->historyRepository->create($history, $column[1], $data['roomNumber']);
        $this->historyRepository->create($history, $column[2], date('y-m-d'));
        $this->historyRepository->create($history, $column[3], $data['diff']);
        $this->historyRepository->create($history, $column[4], $data['totalPrice']);
        return $this->historyRepository->store($history);

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function createElectricHistory($electric)
    {
        $data = [
            'service_id' => $electric->service_id,
            'roomNumber' => $electric->roomNumber,
            'diff' => $electric->diff,
            'totalPrice' => $electric->totalPrice,
        ];
        return $this->create($data);
    }
}
