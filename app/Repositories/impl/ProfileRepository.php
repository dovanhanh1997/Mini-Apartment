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
        return [
            $obj->profileAddress = $request->profileAddress,
            $obj->student_id = $request->student_id,
        ];
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

    public function findById($id)
    {
        return Profile::findOrFail($id);
    }

    public function updateIfValueNull($profile, $column, $data)
    {
        return $profile->$column = $data;
    }

    public function storeImage($profile)
    {
        if (request()->has('profileImage')) {
            $profile->profileImage = request()->profileImage->store('uploads', 'public');
        }
    }

    public function store($profile)
    {
        return $profile->save();
    }
}
