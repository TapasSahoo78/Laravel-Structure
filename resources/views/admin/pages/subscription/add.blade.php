@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.partials.toast')
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin.subscriptions.add') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Add Plan</h4>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Plan Name Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-sm-3 text-end control-label col-form-label">type</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="type" name="type"
                                            placeholder="Enter Email Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_no" class="col-sm-3 text-end control-label col-form-label">price
                                        </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Enter Mobile No Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_type"
                                        class="col-sm-3 text-end control-label col-form-label">Description
                                        :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="description" name="description"
                                            placeholder="Enter Document type here" />
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">
                                        Save Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>

    </div>
@endsection
