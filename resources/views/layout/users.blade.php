@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar')

<a href="{{ url('/users') }}"></a>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Details </h1>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="control-label" for="user id">User Id</label>
                                    <input type="text" name="userid" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="user id">Name</label>
                                    <input type="text" name="userid" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Department</label>
                                    <input type="text" name="userid" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Staff Code</label>
                                    <input type="text" name="userid" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Incident Date Reported</label>
                                    
                                    <input type="date" size="30" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user id">Phone No</label>
                                    <input type="text" name="userid" class="form-control" required>
                                </div>
                            </div>
                        </div>
                       
              

                    </form>
                </div>
            </div>


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