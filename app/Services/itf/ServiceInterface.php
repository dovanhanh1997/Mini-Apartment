<?php


namespace App\Services\itf;


use http\Env\Request;

interface ServiceInterface
{
    public function all();

    public function update($request, $id);

    public function create($request);

    public function delete($id);

    public function show($id);
}
