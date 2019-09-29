<?php


namespace App\Services\itf;


interface RoomServiceInterface extends ServiceInterface
{
    public function getActiveRoom();

    public function getInactiveRoom();

    public function addService($id,$serviceId);

    public function detachService($id,$serviceId);
}
