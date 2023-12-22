@extends('admin.layouts.dashboard-app')
@push('styles')
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
@endpush
@section('content')
    <div class="page-wrapper-inner">
        <!-- Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-0">
                    <div class="row align-items-center">

                        <!--</div>-->
                        <div class="col-md-8 border-left">
                            <a href="">
                                <span class="text-muted">Total Citizen/ User</span>
                                <h3 class="mb-0 fw-bold"></h3>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <div class="peity_line_neutral  text-right ">
                                <a href="">
                                    <i class="me-2 mdi mdi-account" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card mt-0">
                    <div class="row align-items-center">

                        <div class="col-md-8 border-left ">
                            <a href="">
                                <span class="text-muted">Total Stand</span>
                                <h3 class="mb-0 fw-bold"></h3>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <div class="peity_line_neutral  text-right ">
                                <a href="">
                                    <i class="me-2 mdi mdi-car" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card mt-0">
                    <div class="row align-items-center">

                        <div class="col-md-8 border-left ">
                            <a href="">
                                <span class="text-muted">Total Toto</span>
                                <h3 class="mb-0 fw-bold"></h3>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <div class="peity_line_neutral  text-right ">
                                <a href="">
                                    <i class="mdi mdi-car-connected" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card mt-0">
                    <div class="row align-items-center">

                        <div class="col-md-8 border-left">
                            <a href="">
                                <span class="text-muted">Total Bookings</span>
                                <h3 class="mb-0 fw-bold"></h3>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <div class="peity_line_neutral  text-right ">
                                <a href="">
                                    <i class="mdi mdi-relative-scale" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- End cards -->

       <!-- Charts -->
       <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Graph</h5>
                    <div class="bars" style="height: 400px"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bookings</h5>
                    <div class="pie" style="height: 400px"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Charts -->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        function initMap() {
            const myLatLng = {
                lat: 22.2734719,
                lng: 70.7512559
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: myLatLng,
            });

            var locations = [
                ['Mumbai', 19.0760, 72.8777],
                ['Pune', 18.5204, 73.8567],
                ['Bhopal ', 23.2599, 77.4126],
                ['Agra', 27.1767, 78.0081],
                ['Delhi', 28.7041, 77.1025],
                ['Rajkot', 22.2734719, 70.7512559],
            ];

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));

            }
        }

        window.initMap = initMap;
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
@endpush
