@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <!-- <a class="navbar-brand" href="javascript:;">Login Page</a> -->
            </div>
            <div class="navbar-wrapper">
                <a href="{{ route('register') }}" class="btn btn-primary mt-0 float-right">
                    <i class="material-icons">person_add</i>
                    Register</a>
            </div>
        </div>
    </nav>

    @if(Session::has('success'))

        <div class="modal fade subscibe-modal modal-two" id="subscibeModal1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Thank you.</h2>
                        <p>{{Session::get('success')}}. </p>

                        <a href="#" class="close-modal" data-dismiss="modal"><i class="far fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter ps img-connexion" filter-color="black">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="" action="">
                            <div class="card card-login">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Login</h4>
                                </div>
                                <div class="card-body mt-3">
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Email...">
                                        </div>
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Password...">
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-rose btn-link btn-lg">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>
@endsection
