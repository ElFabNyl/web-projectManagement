@extends('layouts.app')

@section('title')
    {{ __('Register') }}
@endsection

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
                        <form class="form" action="{{ route('store') }}" id="send">
                            @csrf
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
                                            <input type="name" class="form-control" placeholder="name..." name="name">
                                        </div>
                                    </span>
                                    <br><span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="lastname" class="form-control" placeholder="last name..."
                                                   name="last_name">
                                        </div>
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                            </div>
                                            <input type="phone" class="form-control" placeholder="Phone..."
                                                   name="phone">
                                        </div>
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Email..."
                                                   name="email">
                                        </div>
                                    </span><br>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Password..."
                                                   name="password">
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
                                                   placeholder="Confirm Password..." name="password_confirmation">
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <input type="submit" class="btn btn-primary mt-4" value="Register"/>
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

@section('js')

    <script>

        $('#send').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                datatype: 'json',
                success: function (response) {
                    if (!response.status) {
                        $.each(response.error, function (data) {
                            toastr.options =
                                {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-bottom-right",
                                    "preventDuplicates": true,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }
                            toastr.warning(response.error[data]);
                        })
                    }

                    if (response.status) {
                        $("#send")[0].reset();
                        toastr.options =
                            {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-center",
                                "preventDuplicates": true,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                        toastr.success('Your Account are successfully Created Please Login Now');
                    }
                },
                error: function() {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.error('Unable to established connection. Please Try later');

                }
            })
        })


    </script>

@endsection
