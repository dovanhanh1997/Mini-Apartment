<?php


namespace App\Services\itf;


use http\Env\Request;

interface CRUDServiceInterface
{
    public function all();
    public function update($request,$id);
    public function create($request);
    public function delete($id);
}
