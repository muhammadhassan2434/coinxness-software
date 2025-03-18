@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Deposit Requests</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Name</th>
                            <th>Account Number</th>
                            <th>Request Date</th>
                            <th>Screenshot</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($requests->isNotEmpty())
                            @foreach ($requests as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name ?? 'N/A' }}</td>
                                    <td>{{ $item->account_number ?? 'N/A' }}</td>
                                    <td>{{ $item->created_at ?? 'N/A' }}</td>
                                    <td>
                                        @if ($item->payment_screenshot)
                                            <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#screenshotModal" 
                                                onclick="showScreenshot('{{ asset($item->payment_screenshot) }}')">
                                                Check
                                            </button>
                                        @else
                                            <span class="text-muted">No Screenshot</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('deposit.approve', $item->id) }}" class="btn btn-primary btn-sm">
                                            Approve
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-danger text-center">
                                    <h1>Records not found</h1>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Screenshot Modal -->
    <div class="modal fade" id="screenshotModal" tabindex="-1" aria-labelledby="screenshotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screenshotModalLabel">Payment Screenshot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="screenshotImage" src="" class="img-fluid rounded" alt="Payment Screenshot">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customjs')
<script>
    function showScreenshot(imageUrl) {
        document.getElementById('screenshotImage').src = imageUrl;
    }
</script>
@endsection
