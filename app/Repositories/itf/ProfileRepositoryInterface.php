<?php


namespace App\Repositories\itf;


interface ProfileRepositoryInterface
{
    public function all();

    public function findByStudentId($id);

    public function findById($id);

    public function update($request, $id);

    public function create($obj, $request);

    public function delete($id);

    public function createIfNotExist($request);

    public function updateIfValueNull($profile,$column,$data);

    public function store($profile);

    public function storeImage($profile);
}
