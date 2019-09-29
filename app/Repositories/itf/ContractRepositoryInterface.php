<?php


namespace App\Repositories\itf;


interface ContractRepositoryInterface extends RepositoryInterface
{
    public function createNewContract();

    public function getActive();

    public function getInactive();
}
