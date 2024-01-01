@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<div id="layoutSidenav_content">
    <main>

        <body background={{ asset('images\plains.jpg') }} style="background-repeat:no-repeat;background-size:100%">
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
                        Incident Description
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <p class="card-text">Incidence Report No: {{ $incidents->incident_report_no }}</p>
                            <p class="card-text">Type : {{ $incidents->type }}</p>
                            <p class="card-text">Location : {{ $incidents->location }}</p>
                            <p class="card-text">Incident Date Detected : {{$incidents->incident_date_detected }}</p>
                            <p class="card-text">Incident Date Reported : {{ $incidents->incident_date_reported }}</p>
                            <p class="card-text">Description : {{ $incidents-> description}}</p>
                            <p class="card-text">Initial Response : {{ $incidents-> initial_response}}</p>
                        </div>
                        </hr>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Incidence Reported By
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <p class="card-text">Name: {{ $incidents->incidence_reported_by_name }}</p>
                            <p class="card-text">Department: {{ $incidents->incidence_reported_by_department }}</p>
                            <p class="card-text">Contact : {{ $incidents->incidence_reported_from_contact}}</p>
                            <p class="card-text">Email : {{ $incidents->incidence_reported_from_email }}</p>
                        </div>
                        </hr>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Informed To
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{route('add_inform')}}" method="POST">
                                @csrf
                                <input type="hidden" name="report_id" value="{{$incidents->id}}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user id">Members</label>
                                        <select type="text" name="member_id" class="form-control" required>
                                            <option value="">--SELECT MEMBER--</option>
                                            @forelse($members as $member)
                                            <option value="{{$member->id}}">{{$member->members_name}}</option>
                                            @empty
                                            <option value="">No Data Available!</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    </br>
                                    <button type="submit" class="btn btn-success btn-sm" title="Add New Contact">
                                        <i clss="fa fa-plus" aria-hidden="true"></i>Add</button>
                            </form>
                        </div>
                        </br>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        
                                        <th>Department/Unit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inform->inform as $m)

                                    <tr>
                                        <td>{{ $m->members_name }}</td>
                                        <td>{{ $m->members_designation }}</td>
                                        <td>{{ $m->members_unit }}</td>
                                        <td><a href="{{route('remove_inform', ['member_id' => $m->id, 'report_id' => $incidents->id])}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </hr>
                    
                </div>


</div>



                
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Incidence Response Team
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('add_response')}}" method="POST">
                            @csrf
                            <input type="hidden" name="report_id" value="{{$incidents->id}}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Response Team</label>
                                    <select type="text" name="member_id" class="form-control" required>
                                        <option value="">--SELECT MEMBER--</option>
                                        @forelse($members as $member)
                                        <option value="{{$member->id}}">{{$member->members_name}}</option>
                                        @empty
                                        <option value="">No Data Available!</option>
                                        @endforelse
                                    </select>
                                </div>
                                </br>
                                <button type="submit" class="btn btn-success btn-sm" title="Add New Contact">
                                    <i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                        </form>
                    </div>
                    </br>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Staff Code</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Department/Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($response->response as $res)
                                <tr>
                                    <td>{{ $res->members_code }}</td>
                                    <td>{{ $res->members_name }}</td>
                                    <td>{{ $res->members_designation }}</td>
                                    <td>{{ $res->members_unit }}</td>
                                    <td><a href="{{route('remove_response', ['member_id' => $res->id, 'report_id' => $incidents->id])}}"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">No Members Assigned!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    </hr>
                </div>
            </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
Impact
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">{{ $incidents->impact }}</p>

        </div>
        </hr>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Members Involved
    </div>
    <div class="card-body">
        <div class="row">
            <form action="{{route('add_member')}}" method="POST">
                @csrf
                <input type="hidden" name="report_id" value="{{$incidents->id}}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user id">Members</label>
                        <select type="text" name="member_id" class="form-control" required>
                            <option value="">--SELECT MEMBER--</option>
                            @forelse($members as $member)
                            <option value="{{$member->id}}">{{$member->members_name}}</option>
                            @empty
                            <option value="">No Data Available!</option>
                            @endforelse
                        </select>
                    </div>
                    </br>
                    <button type="submit" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i>Add</button>
            </form>
        </div>
        </br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Staff Code</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Department/Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($incidents->members as $member)
                    <tr>
                        <td>{{ $member->members_code }}</td>
                        <td>{{ $member->members_name }}</td>
                        <td>{{ $member->members_designation }}</td>
                        <td>{{ $member->members_unit }}</td>
                        <td><a href="{{route('remove_member', ['member_id' => $member->id, 'report_id' => $incidents->id])}}"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No Members Assigned!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </hr>
    </div>
</div>
</div>

<!-- <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Findings
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">{{ $incidents->incidence_reported_by_name }}</p>
            <p class="card-text">{{ $incidents->incidence_reported_by_department }}</p>

        </div>
        </hr>
    </div>
</div> -->

<!-- <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Action Taken
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">{{ $incidents->incidence_reported_by_name }}</p>
            <p class="card-text">{{ $incidents->incidence_reported_by_department }}</p>

        </div>
        </hr>
    </div>
</div> -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Findings
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">{{ $incidents->finding }}</p>

        </div>
        </hr>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Action Taken
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">{{ $incidents->action }}</p>
        </div>
        </hr>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
      Incident Status
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">Status: {{$incidents->status }}</p>
        </div>
        </hr>
    </div>
</div>
</body>
</div>
@include('layout.footer')