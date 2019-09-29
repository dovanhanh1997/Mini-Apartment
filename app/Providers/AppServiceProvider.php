<?php

namespace App\Providers;

use App\Repositories\impl\ContractRepository;
use App\Repositories\impl\ElectricRepository;
use App\Repositories\impl\EquipmentRepository;
use App\Repositories\impl\HistoryRepository;
use App\Repositories\impl\RoomRepository;
use App\Repositories\impl\ServiceRepository;
use App\Repositories\impl\StudentRepository;
use App\Repositories\impl\UserRepository;
use App\Repositories\impl\VehicleRepository;
use App\Repositories\itf\ContractRepositoryInterface;
use App\Repositories\itf\ElectricRepositoryInterface;
use App\Repositories\itf\EquipmentRepositoryInterface;
use App\Repositories\itf\HistoryRepositoryInterface;
use App\Repositories\itf\ProfileRepositoryInterface;
use App\Repositories\itf\RoomRepositoryInterface;
use App\Repositories\itf\ServiceRepositoryInterface;
use App\Repositories\itf\StudentRepositoryInterface;
use App\Repositories\itf\UserRepositoryInterface;
use App\Repositories\itf\VehicleRepositoryInterface;
use App\Repositories\ProfileRepository;
use App\Services\impl\ContractService;
use App\Services\impl\ElectricService;
use App\Services\impl\EquipmentService;
use App\Services\impl\HistoryService;
use App\Services\impl\ProfileService;
use App\Services\impl\RoomService;
use App\Services\impl\SerService;
use App\Services\impl\StudentService;
use App\Services\impl\UserService;
use App\Services\impl\VehicleService;
use App\Services\itf\ContractServiceInterface;
use App\Services\itf\ElectricServiceInterface;
use App\Services\itf\EquipmentServiceInterface;
use App\Services\itf\HistoryServiceInterface;
use App\Services\itf\ProfileServiceInterface;
use App\Services\itf\RoomServiceInterface;
use App\Services\itf\SerServiceInterface;
use App\Services\itf\StudentServiceInterface;
use App\Services\itf\UserServiceInterface;
use App\Services\itf\VehicleServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);

        $this->app->singleton(UserServiceInterface::class, UserService::class);

        $this->app->singleton(ContractRepositoryInterface::class, ContractRepository::class);

        $this->app->singleton(ContractServiceInterface::class, ContractService::class);

        $this->app->singleton(StudentRepositoryInterface::class,
            StudentRepository::class);

        $this->app->singleton(StudentServiceInterface::class,
            StudentService::class);

        $this->app->singleton(ProfileRepositoryInterface::class,
            ProfileRepository::class);

        $this->app->singleton(ProfileServiceInterface::class,
            ProfileService::class);

        $this->app->singleton(VehicleServiceInterface::class,
            VehicleService::class);

        $this->app->singleton(VehicleRepositoryInterface::class,
            VehicleRepository::class);

        $this->app->singleton(RoomRepositoryInterface::class,
            RoomRepository::class);

        $this->app->singleton(RoomServiceInterface::class,
            RoomService::class);

        $this->app->singleton(ElectricServiceInterface::class,
            ElectricService::class);

        $this->app->singleton(ElectricRepositoryInterface::class,
            ElectricRepository::class);

        $this->app->singleton(ServiceRepositoryInterface::class,
            ServiceRepository::class);

        $this->app->singleton(SerServiceInterface::class,
            SerService::class);

        $this->app->singleton(HistoryRepositoryInterface::class,
            HistoryRepository::class);

        $this->app->singleton(HistoryServiceInterface::class,
            HistoryService::class);

        $this->app->singleton(EquipmentRepositoryInterface::class, EquipmentRepository::class);
        $this->app->singleton(EquipmentServiceInterface::class, EquipmentService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
