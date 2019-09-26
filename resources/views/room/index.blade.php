@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Room Active</h3>
                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Room number</th>
                        <th scope="col">Amount Student</th>
                        <th scope="col">Room Size</th>
                        <th scope="col"></th>
                        <th scope="col">Electric Used</th>
                        <th scope="col">Water Used</th>
                        <th scope="col">Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roomActive as $key => $room)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $room->roomNumber }}</td>
                            <td>{{ $room->students->count() }}</td>
                            <td>{{ $room->roomSize }}</td>
{{--                            <td>{{ $room->gender }}</td>--}}
                            <td>
                                <a href="{{ route('students.show',$room->id) }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col">
                <h3>Room Inactive</h3>
                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Room number</th>
                        <th scope="col">Amount Student</th>
                        <th scope="col">Room Size</th>
                        <th scope="col"></th>
                        <th scope="col">Electric Used</th>
                        <th scope="col">Water Used</th>
                        <th scope="col">Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roomInactive as $key => $room)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $room->roomNumber }}</td>
                            <td>{{ $room->students->count() }}</td>
                            <td>{{ $room->roomSize }}</td>
{{--                            <td>{{ $room->gender }}</td>--}}
                            <td>
                                <a href="{{ route('students.show',$room->id) }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
