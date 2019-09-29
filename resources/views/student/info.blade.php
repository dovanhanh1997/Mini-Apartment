@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex">
            <div class="pr-3">
                <h3 style="color: blue">Student: {{ $student->studentName }} Information</h3>
            </div>

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

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #6cb2eb">
                    <div class="card-header">
                        Private Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Full Name: {{ $student-> studentName }}</p>
                                <p>Age: {{ $student->studentAge }}</p>
                                <p>Phone: {{ $student->studentPhone }}</p>
                                <p>Gender: {{ $student->gender }}</p>
                                <p>Address: {{$student->profile->profileAddress}}</p>
                            </div>

                            <div class="col">
                                <img src="{{ asset('storage/'.$student->profile->profileImage) }}" alt="" width="400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="background-color: #2d995b">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="pr-5">
                                Contract Information <br>
                            </div>
                            <div class="pr-5">
                                <a href="" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Contract ID: C-{{ $student->room->contract->id }}</p>
                        <p>Contract Period: {{ $student->room->contract->contractPeriod }} (year)</p>
                        <p>Out Of Date: {{ $student->room->contract->outOfDate }}</p>
                        <p>Status: {{ $student->room->contract->contractStatus }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #9561e2">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="pr-5">
                            Room Information <br>
                            </div>
                            <div class="pr-5">
                            <a href="{{ route('rooms.show',$student->room->id) }}" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Room Number: {{ $student->room->roomNumber }}</p>
                                <p>Room Size: {{ $student->room->roomSize }}</p>
                                <p>Room Service: {{ $student->room->services()->count() }}</p>
                                <p>Room Equipment: {{ $student->room->equipments()->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
