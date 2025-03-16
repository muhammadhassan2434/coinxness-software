@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Withdraws Approved</h1>
                </div>
                <div class="col-sm-6 text-right">
                    {{-- <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a> --}}
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Approved Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($withdraws->isNotEmpty())
                                @foreach ($withdraws as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->name ?? 'N/A' }}</td>
                                        <td>{{ $item->amount ?? 'N/A' }}</td>
                                        <td>{{ $item->updated_at ?? 'N/A' }}</td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-danger text-center">
                                        <h1>Rcords not found</h1>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{-- {{ $users->links('pagination::bootstrap-5') }} --}}

                </div>



            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@section('customjs')
    <script></script>
@endsection
