@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
  <div id="layoutSidenav_content">

    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Incident Report</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">View</li>
        </ol>
        <div class="card">
          <div class="card-header">Incidence Description</div>

          <div class="card-body">

            <form action="{{ url('incident/' .$incidents->id) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              
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
              
              <input type="hidden" name="id" id="id" value="{{$incidents->id}}" id="id" />
              <label>Incident report no</label></br>
              <input type="text" name="incident_report_no" id="incident_report_no" value="{{$incidents->incident_report_no}}" class="form-control" readonly></br>
              <label>Type</label></br>
              <input type="text" name="type" id="type" value="{{$incidents->type}}" class="form-control"></br>
              <label>Location</label></br>
              <input type="text" name="location" id="location" value="{{$incidents->location}}" class="form-control"></br>
              <label>Incident date detected</label></br>
              <input type="date" name="incident_date_detected" id="incident_date_detected" value="{{$incidents->incident_date_detected}}" class="form-control"></br>
              <label>Incident date reported</label></br>
              <input type="date" name="incident_date_reported" id="incident_date_reported" value="{{$incidents->incident_date_reported}}" class="form-control"></br>
              <label>Description</label></br>
              <input type="text" name="description" id="description" value="{{$incidents->description}}" class="form-control"></br>
              <label>Initial Response</label></br>
              <input type="text" name="initial_response" id="initial_response" value="{{$incidents->initial_response}}" class="form-control"></br>
          </div>

          <div class="card-header">Incidence reported by</div>
          <div class="card-body">
            <label>Name</label></br>
            <input type="text" name="incidence_reported_by_name" id="incidence_reported_by_name" value="{{$incidents->incidence_reported_by_name}}" class="form-control"></br>
            <label>Contact</label></br>
            <input type="text" name="incidence_reported_from_contact" id="incidence_reported_from_contact" value="{{$incidents->incidence_reported_from_contact}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="incidence_reported_from_email" id="incidence_reported_from_email" value="{{$incidents->incidence_reported_from_email}}" class="form-control"></br>
            
          </div>

          <div class="card-header">Impact</div>
          <div class="card-body">
            <input type="text" name="impact" id="impact" value="{{$incidents->impact}}" class="form-control"></br>
           
          </div>

          <div class="card-header">Findings</div>
          <div class="card-body">
            <input type="text" name="finding" id="finding" value="{{$incidents->finding}}" class="form-control"></br>
           
          </div>

          <div class="card-header">Action Taken</div>
          <div class="card-body">
            <input type="text" name="action" id="action" value="{{$incidents->action}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          </div>


        </div>
        
      </div>




</body>

@include('layout.footer')