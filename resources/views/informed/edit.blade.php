@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Informed To</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
                <div class="card">
                    <div class="card-header">Informed To Edit</div>
                    <div class="card-body">
                        <form action="{{ url('informed/' .$informed->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$informed->id}}" id="id" />
                            <label>Name</label></br>
                            <input type="text" name="name" id="name" value="{{$informed->name}}" class="form-control"></br>
                            <label>Designation</label></br>
                            <input type="text" name="designation" id="designation" value="{{$informed->designation}}" class="form-control"></br>
                            <label>Department</label></br>
                            <input type="text" name="department" id="department" value="{{$informed->department}}" class="form-control"></br>
                            <input type="submit" value="Update" class="btn btn-success"></br>
                        </form>
                    </div>
                </div>
</body>
@include('layout.footer')