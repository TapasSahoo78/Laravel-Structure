@extends('admin.layouts.app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Stand List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="top-sec-btn">
                            <h5 class="card-title">Stand List</h5>
                            <a href="{{ route('admin.add.stand') }}" method="get" id='adminFrm'>Add Stand
                            </a>
                        </div>

                        <div class="table-responsive">
                            @include('admin.pages.stand.includes.stand-list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
