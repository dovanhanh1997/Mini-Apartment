<?php


namespace App\Repositories;


use App\Profile;
use App\Repositories\itf\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{

    public function all()
    {
        return Profile::all();
    }

    public function findByStudentId($id)
    {
        return Profile::where('student_id', $id)->first();
    }

    public function update($request, $id)
    {
        $profile = $this->findByStudentId($id);
        if ($profile == null) {
            $this->createIfNotExist($request);
        } else {
            return $profile->update([
                'fullName' => $request->fullName,
                'fatherName' => $request->fatherName,
                'motherName' => $request->motherName,
                'profileAddress' => $request->profileAddress,
            ]);
        }
    }

    public function create($obj, $request)
    {
        return $obj->create([
            'student_id' => $request->student_id,
            'fullName' => $request->fullName,
            'fatherName' => $request->fatherName,
            'motherName' => $request->motherName,
            'profileAddress' => $request->profileAddress,
        ]);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


    public function createIfNotExist($request)
    {
        $newProfile = new Profile();
        return $this->create($newProfile, $request);
    }

}
