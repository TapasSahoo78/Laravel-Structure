<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                            class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.user.list')}}" aria-expanded="false"><i
                            class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">Customer Management</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark has-arrow" href="#" aria-expanded="false"><i
                            class="mdi mdi-relative-scale"></i><span class="hide-menu">Booking Management</span></a>

                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="mdi mdi-eye"></i>
                                <span class="hide-menu">Booking List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                            class="mdi mdi-star-circle"></i>
                        <span class="hide-menu">Rating & Reviews</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect has-arrow waves-dark sidebar-link" href="javascript:;"
                        aria-expanded="false"><i class="mdi mdi-file-document"></i>
                        <span class="hide-menu">CMS</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="mdi mdi-google-maps"></i>
                                <span class="hide-menu">CMS Pages</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a href="{{ route('admin.cms_pages', 'privacy') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i>
                                <span class="hide-menu">Privacy Policy</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
