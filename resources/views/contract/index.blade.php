@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Active</h3>

                <table class="table table-dark" border="1px">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Contract</th>
                        <th scope="col">Room</th>
                        <th scope="col">Period</th>
                        <th scope="col">Out of Contract</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contractActive as $key => $contract)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>C0{{ $contract->id }}</td>
                            <td>{{ $contract->room->roomNumber }}</td>
                            <td>{{ $contract->contractPeriod }}</td>
                            <td>{{ $contract->outOfDate }}</td>
                            <td>
                                <form method="post" action="{{ route('contracts.destroy',$contract->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
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
                        <th scope="col">Out of Contract</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contractInactive as $key => $contract)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>C0{{ $contract->id }}</td>
                            <td>{{ $contract->room->roomNumber }}</td>
                            <td>{{ $contract->contractPeriod }}</td>
                            <td>{{ $contract->outOfDate }}</td>
                            <td>
                                <form method="post" action="{{ route('contracts.destroy',$contract->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
