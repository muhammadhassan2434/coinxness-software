@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Withdraws Requests</h1>
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
            </div>
            </form>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Request Date</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($requests->isNotEmpty())
                            @foreach ($requests as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name ?? 'N/A' }}</td>
                                    <td>{{ $item->amount ?? 'N/A' }}</td>
                                    <td>{{ $item->created_at ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('withdraw.approve', $item->id) }}"
                                            class="btn btn-primary">Approve</a>
                                    </td>
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
