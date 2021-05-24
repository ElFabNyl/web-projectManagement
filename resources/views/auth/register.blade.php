@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <!-- <a class="navbar-brand" href="javascript:;">Login Page</a> -->
            </div>
            <div class="navbar-wrapper">
                <a href="{{ route('login') }}" class="btn btn-primary mt-0 float-right">
                    <i class="material-icons">person</i>
                    Login</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter ps img-connexion" filter-color="black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="" action="">
                            <div class="card card-signup">
                                <h2 class="card-title text-center mt-3">Register</h2>
                                <div class="card-body mt-3">
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="First name...">
                                        </div>
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                            </div>
                                            <input type="phone" class="form-control" placeholder="Phone...">
                                        </div>
                                    </span><br>
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
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control"
                                                   placeholder="Confirm Password...">
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo_" class="btn btn-primary mt-4">Register</a>
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
