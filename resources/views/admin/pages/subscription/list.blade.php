@extends('admin.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Subscription Plan List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Customer
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.partials.toast')
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="top-sec-btn">
                            <h5 class="card-title">User List</h5>
                            <a href="{{ route('admin.subscriptions.add') }}">Add Plan</a>
                        </div>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered g-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>App Version</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($users as $key => $row) --}}
                                    <tr>
                                        <td>#1</td>
                                        <td>test</td>
                                        <td>
                                            <div class="demo">
                                                <div class="switch">
                                                    {{-- <input id="switch-{{ $row->id }}" type="checkbox" class="switch-input"
                                                        data-url="{{ route('admin.status.customer') }}" data-id="{{ $row->id }}"
                                                        {{ $row->status == 1 ? 'checked' : '' }} name="status" /> --}}
                                                    {{-- <label for="switch-{{ $row->id }}" class="switch-label">Switch</label> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td>
                                            <div class="action-sec">
                                                <div class="dropdown">
                                                    <a href="#"><i class="me-2 fa fa-edit "></i></a>
                                                    <a href="#">
                                                        <i class="me-2 fa fa-trash "></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
