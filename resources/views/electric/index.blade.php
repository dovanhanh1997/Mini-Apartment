@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Electric Active</h3>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Previous Month</th>
                        <th scope="col">Current Month</th>
                        <th scope="col">Diff</th>
                        <th scope="col">Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($electricActives as $key => $electric)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $electric->roomNumber }}</td>
                            <td>{{ $electric->updated_at }}</td>
                            <td>{{ $electric->previousMonth }}</td>
                            <td>{{ $electric->currentMonth }}</td>
                            <td>{{ $electric->diff }}</td>
                            <td>{{ $electric->totalPrice }}</td>
                            <td><a href="{{ route('electrics.edit' , $electric->id) }}"
                                   class="btn btn-success">Update</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col">
                <h3>Electric Inactive</h3>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Previous Month</th>
                        <th scope="col">Current Month</th>
                        <th scope="col">Diff</th>
                        <th scope="col">Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($electricInactives as $key => $electric)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $electric->roomNumber }}</td>
                            <td>{{ $electric->updated_at }}</td>
                            <td>{{ $electric->previousMonth }}</td>
                            <td>{{ $electric->currentMonth }}</td>
                            <td>{{ $electric->diff }}</td>
                            <td>{{ $electric->totalPrice }}</td>
                            <td><a href="{{ route('electrics.edit' , $electric->id) }}"
                                   class="btn btn-success">Update</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
