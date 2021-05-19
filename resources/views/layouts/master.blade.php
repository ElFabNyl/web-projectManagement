<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="images/pharma.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ $titre }} Customer
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />

    <link rel="stylesheet" href="{{ asset('assets/fonts/fa.brands-400.woff2') }}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fa.regular-400.woff2') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fa.solid-400.woff2') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.webfont.woff2') }}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fa.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/c.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-dashboard.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-dashboard.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/material-icons/css/material-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/material-icons/css/material-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/material-icons/iconfont/material-icons.css') }}">

</head>

<body class="sidebar-mini">
<div class="wrapper ">
    <div class="sidebar ps" data-color="purple" data-background-color="white" data-image="{{ asset('assets/img/sidebar-3.jpg') }}">
        <div class="sidebar-wrapper ps ps--active-y">
            <div class="logo"><a href="#" class="simple-text logo-mini">
                    PT
                </a>
                <a href="#" class="simple-text logo-normal">
                    Project Tracking
                </a>
            </div>
            <div class="user">
                <div class="photo">
                    <span class="sidebar-mini">
                        <img src="{{ asset('assets/img/faces/avatar.jpg') }}">
                    </span>
                </div>
                <div class="user-info">
                    <a href="#" class="simple-text logo-normal">User Name</a>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('project') }}">
                        <i class="fa fa-credit-card"></i>
                        <p>Project</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('notification') }}">
                        <i class="fa fa-bell"></i>
                        <p>Notification</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('invoices') }}">
                        <i class="fa fa-money"></i>
                        <p>Invoices</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.html">
                        <i class="fa fa-sign-out"></i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel ps ps--active-y">
        <!-- Navbar -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="material-icons">dashboard</i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right ps" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <i class="fa fa-comments-o"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="logout.html">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
{{--        end header      --}}

        <div class="content">
            <div class="row">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="pb-3 pt-0">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">more_vert</i>
                            <div class="ripple-container"></div>
                        </button>
                        <a class="navbar-brand" style="color:Black !important;" href="#">{{ $page }}</a>
                    </div>

                @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer start -->
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/gulpfile.js') }}"></script>
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.sharrre.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{  asset('assets/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{  asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{  asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{  asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{  asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{  asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{  asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{  asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{  asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{  asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{  asset('assets/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="{{  asset('assets/js/jwdws.js')}}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{  asset('assets/js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{  asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{  asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });

    $(document).ready(function () {
        $('.accordion-head').click(function () {
            //First close the one that is open and rotate an arrow
            $('.dropdown-content').removeClass('visible-dropdown');
            $('.fa-angle-double-down').css('transform', 'translateY(-50%) rotate(0deg)');
            //Then open the one that's clicked on and rotate an arrow
            $(this).next('.dropdown-content').addClass('visible-dropdown');
            $(this).children('.fa-angle-double-down').css('transform', 'translateY(-50%) rotate(-450deg)');
            if ($(this).attr('class') != 'active') {
                $('.accordion-head').removeClass('active');
                $(this).addClass('active');
            }
        })

        $.localScroll();
    })
</script>
<script>
    $(document).ready(function () {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: " ", // barre de recherche du datatable et contenu est "INPUT"
                searchPlaceholder: "Search records",
            }
        });

        var table = $('#datatables').DataTable();

        // Edit record

        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');

            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record

        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');

            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record

        table.on('click', '.like', function () {
            alert('You clicked on Like button');
        });
    });
</script>

</body>

</html>
<!-- footer end -->
