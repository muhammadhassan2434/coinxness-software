@extends('user.layout.layout')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row  mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Transactions </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header" style="display: flex; justify-content: center">
                            <h4 class="card-title">Transactions List</h4>
                        </div>
                        <table class="table table-hover border-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td><strong>{{ $i }}</strong></td>
                                        <td>{{ $transaction->user->name }}</td>
                                        <td>{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->updated_at }}</td>
                                        
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
