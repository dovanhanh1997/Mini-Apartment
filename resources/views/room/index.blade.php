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
                        <th scope="col">Room Service</th>
                        <th scope="col">Room Equipment</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roomActive as $key => $room)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $room->roomNumber }}</td>
                            <td>{{ $room->students->count() }}</td>
                            <td>{{ $room->roomSize }}</td>
                            <td>{{ $room->services()->count() }}</td>
                            <td>{{ $room->equipments()->count() }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('rooms.show',$room->id) }}" class="btn btn-info">Detail</a>

                                    {{--                                    <form method="post" action="{{ route('rooms.destroy',$room->id) }}">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                        @method('delete')--}}
                                    {{--                                        <button type="submit" class="btn btn-danger">Delete</button>--}}
                                    {{--                                    </form>--}}
                                </div>

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
                        <th scope="col">Room Size</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roomInactive as $key => $room)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $room->roomNumber }}</td>
                            <td>{{ $room->roomSize }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('rooms.show',$room->id) }}"
                                       class="btn btn-info">Detail</a>

                                    {{--                                    <form method="post" action="{{ route('rooms.destroy',$room->id) }}">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                        @method('delete')--}}
                                    {{--                                        <button type="submit" class="btn btn-danger">Delete</button>--}}
                                    {{--                                    </form>--}}
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
