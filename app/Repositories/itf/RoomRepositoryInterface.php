<?php


namespace App\Repositories\itf;


interface RoomRepositoryInterface
{
    public function all();

    public function findById($id);

    public function update($request, $id);

    public function create($request);

    public function delete($id);

    public function getActiveRoom();

    public function getInactiveRoom();

    public function addService($room,$serviceId);

    public function detachService($room,$serviceId);
}
