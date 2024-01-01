@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')
<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4">Fiscalyear Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
<div class="card">
  <div class="card-header">Fiscal Year Details Edit</div>
  <div class="card-body">
      
      <form action="{{ url('fiscalyear/' .$fiscalyear->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fiscalyear->id}}" id="id" />
        <label>Fiscal year</label></br>
        <input type="text" name="fiscal_year" id="fiscal_year" value="{{$fiscalyear->fiscal_year}}" class="form-control"></br>
        <label>Status</label></br>
        <!-- <input type="text" name="status" id="status" value="{{$fiscalyear->status}}" class="form-control"></br> -->
        <select type="text" name="status" class="form-control" required>
                                        <option value="1" input type="text" class="form-control" required>Active</option>
                                        <option value="0">Inactive</option>
                                      
                                    </select>
</br>
        <input type="submit" value="Update" class="btn btn-success"></br>  
    </form>
</div>
</div>
</body>

@include('layout.footer')