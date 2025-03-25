@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Support Detail</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Support Request Information</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th class="w-25">Name:</th>
                            <td>{{$support->name}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$support->email}}</td>
                        </tr>
                        <tr>
                            <th>Message:</th>
                            <td>{{$support->message}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.support') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Support List
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customjs')
@endsection
