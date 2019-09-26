<?php


namespace App\Services\impl;


use App\Repositories\itf\ProfileRepositoryInterface;
use App\Services\itf\ProfileServiceInterface;

class ProfileService implements ProfileServiceInterface
{
    /**
     * @var ProfileRepositoryInterface
     */
    private $profileRepository;

    public function __construct(ProfileRepositoryInterface $profileRepository)
    {

        $this->profileRepository = $profileRepository;
    }

    public function all()
    {
        return $this->profileRepository->all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $id)
    {
        return $this->profileRepository->update($request, $id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
