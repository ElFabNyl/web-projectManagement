@extends('layouts.app')

@section('title')
    {{ __('Login') }}
@endsection

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

    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter ps img-connexion" filter-color="black">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" action="{{ route('login') }}" id="connect">
                            @csrf
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
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <input type="submit" class="btn btn-rose btn-link btn-lg" value="Sign In"/>
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
        $('#connect').on('submit', function (e) {
            e.preventDefault()

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    if (!response.status && response.error) {
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

                    if (!response.status && response.message) {

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
                            toastr.info(response.message);
                    }

                    if(response.status){

                        console.log(response)
                        location.href = "{{ route('dashboard') }}"
                    }
                },
                error: function () {
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
