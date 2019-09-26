<?php


namespace App\Repositories\itf;


interface RoomRepositoryInterface extends CRUDRepositoryInterface
{
    public function getActiveRoom();
    public function getInactiveRoom();
}
