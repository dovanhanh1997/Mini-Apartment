<?php


namespace App\Repositories\itf;


use http\Env\Request;

interface RepositoryInterface
{
    public function all();
    public function findById($id);
    public function update($request,$id);
    public function create($obj,$request);
    public function delete($id);
}
