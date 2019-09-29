<?php


namespace App\Services\impl;


use App\Profile;
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
        return $this->profileRepository->findById($id);
    }

    public function update($request, $id)
    {
        $profile = $this->findById($id);
        $profileAddress = 'profileAddress';
        if ($request->profileAddress != null) {
            $this->profileRepository->updateIfValueNull($profile, $profileAddress, $request->profileAddress);
        }

        $this->profileRepository->storeImage($profile);

        return $this->profileRepository->store($profile);
    }

    public function create($request)
    {
        $profile =new Profile();
        $this->profileRepository->storeImage($profile);
        $this->profileRepository->create($profile,$request);
        return $this->profileRepository->store($profile);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }
}
