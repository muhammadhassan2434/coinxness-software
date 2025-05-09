@extends('user.layout.layout')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card-body pt-2">
                        <div class="text-center">
                            <h3 class="mt-4 mb-1 text-center">Send Payment Here!</h3>

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                        
                            <!-- Admin Account Info -->
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card bg-light p-3">
                                        <p><strong>Account Title :</strong> MUHAMMAD YASIR ABBAS</p>
                                        <p><strong>Bank Name :</strong> Meezan Bank</p>
                                        <p><strong>Bank detail :</strong> Meezan Bank-Civil Lines Branch, Faisalabad</p>
                                        <p><strong>Account Number:</strong>04140109665273</p>
                                        <p><strong>IBAN:</strong>PK61MEZN0004140109665273</p>
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
                                <h4 class="mb-3 text-center">Upload payment screenshoot</h4>
                                <form action="{{ route('deposit.uploadscreenshoot') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <input type="hidden" name="deposit_id" value="{{$deposit_id}}" id="">
                                        <label for="payment_screenshot">Upload Payment Screenshot</label>
                                        <input type="file" id="payment_screenshot" name="payment_screenshot" class="form-control" required>
                                        @error('payment_screenshot')
                                            <span class="text-danger">{{ $message }}</span>
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
