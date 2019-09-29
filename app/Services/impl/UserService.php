<?php


namespace App\Services\impl;


use App\Repositories\itf\UserRepositoryInterface;
use App\Services\itf\UserServiceInterface;
use App\User;
use http\Env\Request;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request,$id)
    {
        return $this->userRepository->update($request,$id);
    }

    public function create($request)
    {
        $user = new User();
        return $this->userRepository->create($user,$request);
    }

    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }
}
