<?php


namespace App\Services\impl;


use App\Repositories\itf\RoomRepositoryInterface;
use App\Services\itf\RoomServiceInterface;

class RoomService implements RoomServiceInterface
{
    /**
     * @var RoomRepositoryInterface
     */
    private $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository
    )
    {
        $this->roomRepository = $roomRepository;
    }

    public function all()
    {
        return $this->roomRepository->all();
    }

    public function update($request, $id)
    {
        return $this->roomRepository->update($request, $id);
    }

    public function create($request)
    {
        return $this->roomRepository->create($request);
    }

    public function delete($id)
    {
        return $this->roomRepository->delete($id);
    }


    public function getActiveRoom()
    {
        return $this->roomRepository->getActiveRoom();
    }

    public function getInactiveRoom()
    {
        return $this->roomRepository->getInactiveRoom();
    }

    public function show($id)
    {
        return $this->roomRepository->findById($id);
    }

    public function addService($id, $serviceId)
    {
        $room = $this->roomRepository->findById($id);
        foreach ($room->services as $service) {
            if ($service->id == $serviceId) {
                return null;
            }
        }
        return $this->roomRepository->addService($room, $serviceId);
    }

    public function detachService($id,$request)
    {
        $room = $this->roomRepository->findById($id);
        return $this->roomRepository->detachService($room,$request);
    }
}
