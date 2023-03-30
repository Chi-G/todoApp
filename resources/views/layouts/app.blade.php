<!DOCTYPE html>
<html lang="en">

@include('auth.head')

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('auth.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('auth.sidebar')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget widget-activity-three">
                        <div class="widget-heading">
                            <h5 class="">Welcome To My Todo Dashboard</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">   
                                    
                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Logs</h5>
                                                <span class="">{{ $todo[0]->created_at->toDayDateTimeString() }} </span>
                                            </div>
                                            <p><span>Created</span> Server Logs from Todo Categories</p>
                                            <div class="tags">
                                                <div class="badge badge-primary">{{ Auth::user()->name }} added {{ $todo[0]->category }} to his todo item</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Logs</h5>
                                                <span class="">{{ $todo[0]->created_at->toDayDateTimeString() }} </span>
                                            </div>
                                            <p>Updated <span>Server Logs on Todo Category</span></p>
                                            <div class="tags">
                                                <div class="badge badge-success">{{ Auth::user()->name }} updated {{ $todo[1]->category }} to his todo item</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Reboot</h5>
                                                <span class="">{{ $todo[0]->created_at->toDayDateTimeString() }} </span>
                                            </div>
                                            <p>Server rebooted successfully</p>
                                            <div class="tags">
                                                <div class="badge badge-warning">Rebooted with login from {{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                    </div>                                      
                                </div>                                    
                            </div>
                        </div>
                    </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">

                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">

                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('auth.script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>
