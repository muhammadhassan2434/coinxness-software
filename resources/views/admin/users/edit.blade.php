@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit User</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{route('user.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" 
                                           value="{{ old('name', $user->name) }}">
                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" 
                                           value="{{ old('email', $user->email) }}">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password">Password (Leave blank to keep current)</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="capital">Capital</label>
                                    <input type="text" name="capital" id="capital" class="form-control" 
                                           value="{{ old('capital', $user->capital) }}">
                                    <span class="text-danger">@error('capital'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="balance">Balance</label>
                                    <input type="text" name="balance" id="balance" class="form-control" 
                                           value="{{ old('balance', $user->balance) }}">
                                    <span class="text-danger">@error('balance'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="profit">Profit</label>
                                    <input type="text" name="profit" id="profit" class="form-control" 
                                           value="{{ old('profit', $user->profit) }}">
                                    <span class="text-danger">@error('profit'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="loss">Loss</label>
                                    <input type="text" name="loss" id="loss" class="form-control" 
                                           value="{{ old('loss', $user->loss) }}">
                                    <span class="text-danger">@error('loss'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3 mx-3">
                    <button class="btn btn-primary" name="submit">Update</button>
                    <a href="{{route('user.index')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@section('customjs')
@endsection
