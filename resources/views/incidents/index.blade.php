@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Incident Report</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Incidence Description
                </div>
                <div class="card-body">
                    <a href="{{ url('/incident/create')}}">
                        <button class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Incident Details</button>
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Incident Report No</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Incident Date Detected</th>
                                    <th>Incident Date Reported</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($incidents as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->incident_report_no }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->incident_date_detected }}</td>
                                    <td>{{ $item->incident_date_reported }}</td>
                                    <th>
                                        @if($item->status=="Solved")
                                            <div style="background:green;">
                                        @else
                                            <div style="background:yellow;">
                                        @endif
                                        {{ $item->status }}
                                            </div>
                                    </th>
                                    <!-- <td>    <a href="{{ url('/index/' . $item->id) }}" title="View Incident"><button class="btn btn-success btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> </button></a></td> -->
                                    <td>
                                  
                                        <a href="{{ url('/incident/' . $item->id) }}" title="View Incident"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        <!-- <a href="{{ url('/add/' . $item->id ) }}" title="View Incident"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a> -->
                                        <a href="{{ url('/incident/' . $item->id . '/edit') }}" title="Edit Incident"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> </button></a>

                                        <form method="POST" action="{{ url('/incident' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm( )"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                                        </form>
                                        <a href="{{route('download', ['id' => $item->id])}}" title="Edit Incident"><button class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> </button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                        </div>
                    </form>
                    </body>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
@include('layout.footer')


