<?php


namespace App\Repositories\itf;


interface ContractRepositoryInterface extends CRUDRepositoryInterface
{
    public function createNewContract();
}
