@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="background-color: #5d561b">
                <div class="card col-md-8">
                    <div class="card-header">
                        <h3>History</h3>
                    </div>
                    <div class="card-body">
                        Electric History
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Room Number</th>
                                <th scope="col">Date</th>
                                <th scope="col">Diff</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($histories as $key => $history)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $history->service->serviceName }}</td>
                                    <td>{{ $history->roomNumber }}</td>
                                    <td>{{ $history->date }}</td>
                                    <td>{{ $history->diff }}</td>
                                    <td>{{ $history->totalPrice }}</td>
                                    <td><a href="{{ route('electrics.edit' , $history->id) }}"
                                           class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
