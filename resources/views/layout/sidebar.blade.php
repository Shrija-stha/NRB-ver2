<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>

                        <!-- <a class="nav-link" href="{{ url('/users') }}" >
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></i></div>
                                Users -->

                        <!-- <a class="nav-link" href="{{ url('/record') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Records
                                
                            </a> -->

                        <!-- <a class="nav-link" href="{{ url('/tables') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->

                        <!-- <a class="nav-link" href="{{ url('/index') }}">
                      
                            <div class="sb-nav-link-icon"><i class="fas fa-file-text"></i></div>
                            Reports
                        </a> -->

                        <!-- <a class="nav-link" href="{{ url('/detailspage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                            Details
                        </a> -->
                        <!-- 
                         <a class="nav-link" href="{{ url('/memberspage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                            Members
                        </a> -->
                        <!-- 
                        <a class="nav-link" href="{{ url('/statuspage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-hourglass-half"></i></div>
                            Status
                        </a> -->

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout3" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-text"></i></div>
                            Incident
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('incident.create')}}">Add New</a>
                                <a class="nav-link" href="{{ route('incident.index') }}">List</a>
                            </nav>
                        </div>

                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout4" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/inds/create')}}">Add New</a>
                                <a class="nav-link" href="{{ url('/insdex') }}">List</a>
                            </nav>
                        </div> -->

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout5" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Members
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/member/create') }}">Add New</a>
                                <a class="nav-link" href="{{ url('/member') }}">List</a>

                            </nav>
                        </div>


                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout6" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                            Fiscal Year
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/fiscalyear/create') }}">Add New</a>
                                <a class="nav-link" href="{{ url('/fiscalyear') }}">List</a>

                            </nav>
                        </div> 

                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout7" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Response Team
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout7" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/responseteams/create') }}">Add New</a>
                                <a class="nav-link" href="{{ url('/responseteams') }}">List</a>
                            </nav>
                        </div> -->

                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout8" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Informed To
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout8" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/informed/create') }}">Add New</a>
                                <a class="nav-link" href="{{ url('/informed') }}">List</a>
                            </nav>
                        </div> -->




                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
</body>