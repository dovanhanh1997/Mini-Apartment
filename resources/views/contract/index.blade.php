@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Active</h3>
            </div>
            <div class="col">
                <h3>Inactive</h3>

                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Contract</th>
                        <th scope="col">Room</th>
                        <th scope="col">Period</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contracts as $key => $contract)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>C0{{ $contract->id }}</td>
                            <td>{{ $contract->room->roomNumber }}</td>
                            <td>{{ $contract->contractPeriod }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
