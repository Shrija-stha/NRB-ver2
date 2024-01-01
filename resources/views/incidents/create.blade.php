@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
            <h1 class="mt-4">Incident Report</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
            <div class="card">
                <div class="card-header">Incident Status </div>
                <div class="card-body">
                    <form action="{{ url('incident') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Status of Incident</label>
                                    <!-- <input type="text" name="status" class="form-control" required> -->
                                    <select type="text" name="status" class="form-control" required>
                                        <option value="Pending" input type="text" class="form-control" required>Pending</option>
                                        <option value="Solved">Solved</option>
                                    </select>
                                </div>
                                </br>
                            </div>
                            </br>
                            </br>
                            </br> 
                </div>
            </div>
        </div>        
</br>
            <div class="card">
                <div class="card-header">Add Incident </div>
                <div class="card-body">
                
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="control-label" for="user id">Incident Report no</label></br>
                                    <input type="text" value="{{$incident_report_no}}" readonly name="incident_report_no" class="form-control">
                                    <input type="hidden" value="{{$highestIndex}}" readonly name="highest_index">
                                    <input type="hidden" value="{{$currentfiscalyear->id}}" readonly name="fiscal_year_id">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user id">Location</label>
                                    <input type="text" name="location" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Date of Incident</label>
                                    <input type="date" name="incident_date_detected" size="30" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Incident Reported Date</label>

                                    <input type="date" name="incident_date_reported" size="30" class="form-control">
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Type of Incident</label>
                                    <select type="text" name="type" class="form-control" required>
                                        <option value="Denial of Service" input type="text" class="form-control" required>Denial of Service</option>
                                        <option value="Malware/Ransom Ware">Malware/Ransom Ware</option>
                                        <option value="Unauthorized Use/Disclosure">Unauthorized Use/Disclosure</option>
                                        <option value="Loss theft">Loss theft</option>
                                        <option value="NRB Website Down">NRB Website Down</option>
                                        <option value="Unauthorized Access">Unauthorized Access</option>
                                        <option value="Unplanned Downtime">Unplanned Downtime</option>
                                        <option value="Account Compromise">Account Compromise</option>
                                        <option value="Advanced persistent Attack">Advanced persistent Attack</option>
                                        <option value="Intrusion">Intrusion</option>
                                        <option value="Inadvertent site security">Inadvertent site security</option>
                                        <option value="Phising">Phising</option>
                                        <option value="Misuse of system">Misuse of system</option>
                                        <option value="Outage of Infrastructure">Outage of Infrastructure</option>
                                        <option value="Social Engineering">Social Engineering</option>
                                    </select>
                                </div>
                                </br>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user id">New Incident Type</label>
                                    <input type="text" name="type" class="form-control" required>
                                </div>
                            </div>
</div>
                            <div class="col-md-20">
                                <div class="form-group">
                                    <label for="user id">Description</label>

                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>
                            </br>
                            <div class="col-md-20">
                                <div class="form-group">
                                    <label for="user id">Initial Response</label>
                                    <textarea class="form-control" input type="text" name="initial_response" id="exampleFormControlTextarea1" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                            </br>
                            </br>
                            <div class="card-body">
                                <label for="exampleFormControlTextarea1" class="form-label">Incidence Reported By:</label>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">

                                                <label class="control-label" for="user id"> Name</label>
                                                <input type="text" name="incidence_reported_by_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="control-label" for="user id"> Department</label>
                                                <input type="text" name="incidence_reported_by_department" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="control-label" for="user id"> Contact</label>
                                                <input type="text" name="incidence_reported_from_contact" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="control-label" for="user id"> Email</label>
                                                <input type="text" name="incidence_reported_from_email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-20">
                                        <div class="form-group">
                                            <label for="user id">Impact </label>
                                            <textarea class="form-control" name="impact" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-20">
                                        <div class="form-group">
                                            <label for="user id">Findings </label>
                                            <textarea class="form-control" name="finding" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-20">
                                        <div class="form-group">
                                            <label for="user id">Action Taken </label>
                                            <textarea class="form-control" name="action" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    </br>
                                    <input type="submit" value="Save" class="btn btn-success"></br>
                                    </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </body>
        @include('layout.footer')