<?php


namespace App\Repositories\itf;


interface ProfileRepositoryInterface
{
    public function all();

    public function findByStudentId($id);

    public function update($request, $id);

    public function create($obj, $request);

    public function delete($id);

    public function createIfNotExist($request);
}
