<?php


namespace App\Repositories\impl;


use App\Repositories\itf\StudentRepositoryInterface;
use App\Student;

class StudentRepository implements StudentRepositoryInterface
{

    public function all()
    {
        return Student::all();
    }

    public function findById($id)
    {
        return Student::find($id);
    }

    public function update($request, $id)
    {
        return $this->findById($id)->update($request->all());
    }

    public function create($obj, $request, $idContract)
    {
        return $obj->create([
            'contract_id' => $idContract,
            'studentName' => $request->studentName,
            'studentAge' => $request->studentAge,
            'studentPhone' => $request->studentPhone,
            'gender' => $request->gender,
        ]);
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }

    public function createNewStudent()
    {
        return new Student();
    }
}
