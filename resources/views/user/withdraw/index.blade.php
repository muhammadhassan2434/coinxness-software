@extends('user.layout.layout')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card-body pt-2">
                        <div class="text-center">
                            <h3 class="mt-4 mb-1 text-center">ASK FOR WITHDRAWL</h3>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            <div class="row my-5 d-flex justify-content-center">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card l-bg-green-dark">
                                        <div class="card-statistic-3 p-4 text-white">
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0 text-left">Balance</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        {{ Auth::user()->balance }}
                                                    </h2>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card l-bg-orange-dark">
                                        <div class="card-statistic-3 p-4 text-white">
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0 text-left">Pending Withdrawl</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        {{ $withdrawls }}
                                                    </h2>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 text-center">Make a Request</h4>
                                <form action="{{ route('request.withdraw') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">Enter Amount to Withdraw</label>
                                        <input type="number" id="amount" name="amount" class="form-control">
                                        @error('amount')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
