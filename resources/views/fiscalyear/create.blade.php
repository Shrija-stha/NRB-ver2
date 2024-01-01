@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
                    <h1 class="mt-4">Fiscal Year Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                    <div class="card">
                        <div class="card-header">Add Year </div>
                        <div class="card-body">

                            <form action="{{ url('fiscalyear') }}" method="post">
                                {!! csrf_field() !!}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="control-label" for="user id">Fiscal Year</label>
                                            <input type="text" name="fiscal_year" class="form-control" required>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="user id">Status</label>
                                            <!-- <input type="text" name="status" class="form-control" required> -->
                                            <select type="text" name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                           
                                        </div>
                                    </div>
                                    
                                </div>                
</br>

                                    </br>
                                    </br>
                                    
                                           
                                            </br>
                                            <input type="submit" value="Save" class="btn btn-success"></br>
                                            </a>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
</div>
</body>
@include('layout.footer')