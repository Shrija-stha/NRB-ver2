@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')
<div id="layoutSidenav_content">
    <main>
    <body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
        <div class="container-fluid px-4">
            <h1 style="text-align:center;">Nepal Rastra Bank</h1>
            <h1 style="text-align:center;">Information and Technology Department</h1>
            <h1 class="mt-4" p style="font-size:30px">IT Incident Report</p>
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Members Details
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <p class="card-text">Staff Code: {{ $members->members_code }}</p>
                        <p class="card-text">Name : {{ $members->members_name }}</p>
                        <p class="card-text">Designation : {{ $members->members_designation }}</p>
                        <p class="card-text">Department/Unit : {{ $members->members_unit }}</p>
           

                    </div>

                    </hr>

                </div>
            </div>
</body>




            @include('layout.footer')