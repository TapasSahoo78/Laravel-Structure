@extends('admin.layouts.app')
@section('content')
    <div class="page-wrapper-inner">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- @include('admin.layouts.partials.toast') --}}
                        <form class="form-horizontal" id="adminFrm" data-action="{{ route('admin.add.stand') }}"
                            method="post">
                            @csrf

                            <div class="card-body">
                                <h4 class="card-title">Add Stand</h4>
                                <div class="form-group row">
                                    <label for="stand_name" class="col-sm-3 text-end control-label col-form-label">Stand
                                        Name :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="stand_name" name="stand_name"
                                            placeholder="Stand Name Here" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-end control-label col-form-label">
                                        Address :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Address Here" />
                                    </div>
                                </div>
                                <div class="form-group row" id="longtitudeArea">
                                    <label for="longitude" class="col-sm-3 text-end control-label col-form-label">
                                        Longitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="longitude" name="longitude"
                                            placeholder="Longitude Here" />
                                    </div>
                                </div>
                                <div class="form-group row" id="latitudeArea">
                                    <label for="latitude" class="col-sm-3 text-end control-label col-form-label">
                                        Lattitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="latitude" name="latitude"
                                            placeholder="Latitude Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <!--begin::Label-->
                                    <label for="stand_manager" class="col-sm-3 text-end control-label col-form-label">Stand
                                        Manager</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="col-sm-9">
                                        {{-- <input type="text" name="stand_manager" id="stand_manager"
                                            class="typeahead form-control" placeholder="Choose Manager" /> --}}
                                        <select name="stand_manager" class="form-control" id="">
                                            {{ getStandManagerList('') }}
                                        </select>
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
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--<script type="text/javascript"-->
    <!--    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>-->
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyA2mtyhq14pKHoTX0JMCqyTd1oxVrnr3fE&libraries=places"></script>
    <script>
        $(document).ready(function() {
            $("#latitudeArea").addClass("d-none");
            $("#longtitudeArea").addClass("d-none");
        });
    </script>
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('address');
            var address = new google.maps.places.Autocomplete(input);

            address.addListener('place_changed', function() {
                var place = address.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            // Constructing the suggestion engine
            var managers = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: "{{ route('get.standManagers') }}?search=%QUERY",
                    cache: false,
                    wildcard: '%QUERY',
                    filter: function(list) {
                        if (list.managers.length > 0) {
                            return list.managers;

                        }
                    }
                }
            });

            // Initializing the typeahead
            $('#stand_manager').typeahead({
                hint: true,
                highlight: true,
                /* Enable substring highlighting */
                minLength: 3,
                /* Specify minimum characters required for showing suggestions */
                displayKey: 'stand_manager',
                valueKey: 'stand_manager',
            }, {
                name: 'managers',
                source: managers,
            });

        });
    </script>
@endpush
