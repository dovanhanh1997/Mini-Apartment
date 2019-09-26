@extends('layouts/app')
@section('content')
    <div class="container">
        <h3>Active</h3>
        <div class="row">
            <div class="col">
                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Contract Number</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Profile</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $key => $student)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ 'C-'.$student->room->contract->id }}</td>
                            <td>{{ $student->room->roomNumber }}</td>
                            <td>{{ $student->studentName }}</td>
                            <td>{{ $student->studentAge }}</td>
                            <td>+84{{ $student->studentPhone }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>
                                <a href="{{ route('students.show',$student->id) }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
