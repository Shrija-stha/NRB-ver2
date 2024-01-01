@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')
<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4">Members Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
<div class="card">
  <div class="card-header">Members Details Edit</div>
  <div class="card-body">
      
      <form action="{{ url('member/' .$members->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$members->id}}" id="id" />
        <label>Staff Code</label></br>
        <input type="text" name="members_code" id="members_code" value="{{$members->members_code}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="members_name" id="members_name" value="{{$members->members_name}}" class="form-control"></br>
        <label>Designation</label></br>
        <input type="text" name="members_designation" id="members_designation" value="{{$members->members_designation}}" class="form-control"></br>
        <label>Department/Unit</label></br>
        <input type="text" name="members_unit" id="members_unit" value="{{$members->members_unit}}" class="form-control"></br>     
        <input type="submit" value="Update" class="btn btn-success"></br>  
    </form>
</div>
</div>
</body>

@include('layout.footer')