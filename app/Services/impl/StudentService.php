<?php


namespace App\Services\impl;


use App\Repositories\itf\StudentRepositoryInterface;
use App\Services\itf\StudentServiceInterface;
use App\Student;

class StudentService implements StudentServiceInterface
{
    /**
     * @var StudentRepositoryInterface
     */
    private $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function all()
    {
        return $this->studentRepository->all();
    }

    public function findById($id)
    {
        return $this->studentRepository->findById($id);
    }

    public function update($request, $id)
    {
        $student = $this->studentRepository->findById($id);
        $studentName = 'studentName';
        $studentAge = 'studentAge';
        $studentPhone = 'studentPhone';
        if ($request->studentName != null){
            $this->studentRepository->update($student,$studentName,$request->studentName);
        }
        if ($request->studentAge != null){
            $this->studentRepository->update($student,$studentAge,$request->studentAge);
        }

        if ($request->studentPhone != null){
            $this->studentRepository->update($student,$studentPhone,$request->studentPhone);
        }

        return $this->studentRepository->store($student);
    }

    public function create($request)
    {
        $idContract = $this->getIdContract($request);
        $student = $this->studentRepository->createNewStudent();
        return $this->studentRepository->create($student, $request, $idContract);
    }

    public function delete($id)
    {
        return $this->studentRepository->delete($id);
    }

    public function getIdContract($request)
    {
        $idContract = explode("0", $request->idContract, 2);

        foreach ($idContract as $value) {
            if (!is_int($value)) {
                $idContract = $value;
            }
        }
        return $idContract;
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }
}
