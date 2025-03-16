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
                        <div class="card-header" style="display: flex; justify-content: center">
                            <h4 class="card-title">Transactions Report</h4>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="GET" action="{{ route('ledger.history') }}" class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="from_date" value="{{ $fromDate ?? '' }}"
                                                class="form-control" placeholder="From Date">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="to_date" value="{{ $toDate ?? '' }}"
                                                class="form-control" placeholder="To Date">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('ledger.history') }}" class="btn btn-secondary">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mb-3">
                                    <h5>Total Profit: {{ number_format($totalProfit, 2) }}</h5>
                                </div>
                            </div>

                        </div>
                        <table class="table table-hover border-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Profit Earned</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($ledger as $entry)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $entry->date }}</td>
                                        <td>{{ number_format($entry->profit, 2) }}</td>
                                        <td>{{ number_format($entry->balance, 2) }}</td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
