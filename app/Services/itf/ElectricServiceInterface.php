<?php


namespace App\Services\itf;


interface ElectricServiceInterface extends ServiceInterface
{
    public function findByRoomNumber($roomNumber);

    public function getElectricActive();

    public function getElectricInactive();

    public function findById($id);

}
