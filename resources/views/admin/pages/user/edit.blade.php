@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper-inner">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" id="adminFrm" data-action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Edit Customer</h4>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label"> Name
                                        :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name Here" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-sm-3 text-end control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Here" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact
                                        No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                            placeholder="Enter Mobile No Here" value="" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_type"
                                        class="col-sm-3 text-end control-label col-form-label">Document
                                        Type :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="document_type" name="document_type"
                                            placeholder="Enter Document type here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_file"
                                        class="col-sm-3 text-end control-label col-form-label">Document
                                        File :
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" accept="image/*" id="document_file"
                                            name="document_file" />
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">
                                        Update Data
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
