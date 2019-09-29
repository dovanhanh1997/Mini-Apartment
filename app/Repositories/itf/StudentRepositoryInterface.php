<?php


namespace App\Repositories\itf;


interface StudentRepositoryInterface
{
    public function createNewStudent();

    public function all();

    public function findById($id);

    public function update($student,$column,$data);

    public function create($obj, $request,$idContract);

    public function delete($id);

    public function store($student);
}
