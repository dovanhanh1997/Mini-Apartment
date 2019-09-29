<?php


namespace App\Services\itf;


interface ContractServiceInterface extends ServiceInterface
{
    public function getActive();

    public function getInactive();
}
