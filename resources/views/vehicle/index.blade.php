@extends('layouts/app')
@section('content')
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a><br><br>
        <h3>Vehicle Mange</h3>
        <div class="row">
            <div class="col">
                <table class="table table-dark" c border="1px">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Vehicle Name</th>
                        <th scope="col">Vehicle Manufacturer</th>
                        <th scope="col">Vehicle Number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vehicles as $key => $vehicle)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $vehicle->student->profile->fullName }}</td>
                            <td>{{ $vehicle->vehicleName }}</td>
                            <td>{{ $vehicle->vehicleType }}</td>
                            <td>{{ $vehicle->vehicleNumber }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex">
                                            <div class="pr-1">
                                                <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
