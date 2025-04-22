@extends('user.layout.layout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Report</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            <h4 class="card-title">Transactions Report</h4>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="GET" action="{{ route('ledger.history') }}" class="mb-3">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="from_date" value="{{ request('from_date') }}"
                                                class="form-control" placeholder="From Date" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="to_date" value="{{ request('to_date') }}"
                                                class="form-control" placeholder="To Date" required>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('ledger.history') }}" class="btn btn-secondary w-100">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mb-3">
                                    <h5>Total Profit: {{ number_format($totalProfit, 2) }}</h5>
                                    <h5>Total Withdrawals: {{ number_format($totalWithdrawals, 2) }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover border-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Profit Earned</th>
                                        <th>Withdraw</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $entry)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $entry['date'] }}</td>
                                            <td>${{ number_format($entry['profit'], 2) }}</td>
                                            <td>${{ number_format($entry['withdraw'], 2) }}</td>
                                            <td>${{ number_format($entry['balance'], 2) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
