@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 style="color: blue">Student: {{ $student->profile->fullName }} Information</h3>
        <div class="row">
            <div class="col" style="background-color: #5cd08d">
                <ul>
                    <li>Name: {{ Auth::User()->name }}</li>
                    <li>Full Name: {{ $student->profile->fullName }}</li>
                    <li>Email: {{ Auth::User()->email }}</li>
                    <li>Age: {{ $student->studentAge }}</li>
                    <li>Phone: {{ $student->studentPhone }}</li>
                    <li>Gender: {{ $student->gender }}</li>
                </ul>
            </div>
            <div class="col" style="background-color: #4c110f">
                <li style="color: white">Father Name: {{ $student->profile->fatherName }}</li>
                <li style="color: white">Mother Name: {{ $student->profile->motherName }}</li>
                <li style="color: white">Address: {{ $student->profile->profileAddress }}</li>
                <li style="color: white">Image: {{ $student->profile->image }}</li>
            </div>
            <div class="col" style="background-color: #cbd3da">
                <li>Contract Number: C0{{ $student->contract->id }}</li>
                <li>Contract Period: {{ $student->contract->contractPeriod }} year</li>
                <li>Out Of Date: {{ $student->contract->outOfDate }}</li>
                <li>Contract Room: {{ $student->contract->contractRoom }}</li>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2.5" style="background-color: #fde300">
                <div class="col">
                    <li>Vehicle Name: </li>
                    <li>Vehicle Manufacturer: </li>
                    <li>Vehicle Number: </li>
                </div>
            </div>
            @foreach($student->vehicles as $vehicle)
                <div class="col-md-2.8 pr-2" style="background-color: #fde300">
                    {{ $vehicle->vehicleName }}<br>
                    {{ $vehicle->vehicleType }}<br>
                    {{ $vehicle->vehicleNumber }}
                </div>
            @endforeach
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <div class="pr-2">
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">Update</a>
                    </div>
                    <div class="pr-2">
                        <form action="{{ route('students.destroy',$student->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
