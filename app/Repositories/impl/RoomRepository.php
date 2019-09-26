<?php


namespace App\Repositories\impl;


use App\Repositories\itf\RoomRepositoryInterface;
use App\Room;

class RoomRepository implements RoomRepositoryInterface
{

    public function all()
    {
        return Room::all();
    }

    public function findById($id)
    {
        return $this->findById($id);
    }

    public function update($request, $id)
    {
        $room = $this->findById($id);
        return $room->update($request->all());
    }

    public function create($request)
    {
        return Room::create($request->all());
    }

    public function delete($id)
    {
        $room = $this->findById($id);
        return $room->delete();
    }

    public function getActiveRoom()
    {
        return Room::where('status','Active')->get();
    }

    public function getInactiveRoom()
    {
        return Room::where('status','Inactive')->get();
    }
}
