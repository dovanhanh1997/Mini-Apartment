<?php


namespace App\Services\itf;


interface RoomServiceInterface extends CRUDServiceInterface
{
    public function getActiveRoom();

    public function getInactiveRoom();
}
