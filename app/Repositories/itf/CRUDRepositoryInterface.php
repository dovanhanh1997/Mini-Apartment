<?php


namespace App\Repositories\itf;


use http\Env\Request;

interface CRUDRepositoryInterface
{
    public function all();
    public function findById($id);
    public function update($request,$id);
    public function create($request);
    public function delete($id);
}
