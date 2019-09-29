@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row justify-content-center" style="background-color: #383d41">
            <div class="card col-md-8">
                <div class="card-header">
                    <h3><strong>Electric Information: {{ $electric->roomNumber }}</strong></h3>
                </div>
                <div class="card-body">
                    <p>Electric Supplier: {{ $electric->service->serviceSupplier }}</p>
                    <p>Status: {{ $electric->service->serviceStatus }}</p>
                    <p>Price: {{ $electric->service->servicePrice }}</p>
                    <br>
                    <p><strong><h4>Current Month</h4></strong></p>
                    <div class="" style="background-color: #9561e2">
                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">Previous Month</th>
                                <th scope="col">Current Month</th>
                                <th scope="col">Diff Value</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="color: #123c24">{{ $electric->previousMonth }}</td>
                                <td>{{ $electric->currentMonth }}</td>
                                <td>{{ $electric->diff }}</td>
                                <td>{{ number_format($electric->totalPrice).' VND' }}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <br>
                    <p><strong><h4>History :</h4></strong></p>
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Electric Used</th>
                            <th scope="col">Total Price</th>
                        </tr>
                        </thead>
                        <tbody class="table-success">
                        @foreach($electricHistories as $key => $electricHistory)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $electricHistory->date }}</td>
                                <td>{{ $electricHistory->diff }}</td>
                                <td>{{ number_format($electricHistory->totalPrice).' VND' }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <form>
                        <input class="btn btn-dark" type="button" value="Back" onClick="history.go(-1)" />
                    </form>
                </div>
            </div>
        </div>
    </div>
   @endsection
