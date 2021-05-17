@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="pb-5">
            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                <div class="ripple-container"></div>
            </button>
            <a class="navbar-brand" style="color:Black !important;" href="index.html">Dashboard</a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-folder-open"></i>
                        </div>
                        <p class="card-category">On going</p>
                        <h3 class="card-title">15
                            <small>project</small>
                        </h3>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-folder"></i>
                        </div>
                        <p class="card-category">Completed</p>
                        <h3 class="card-title">20
                            <small>project</small>
                        </h3>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <p class="card-category">Total Spend</p>
                        <h3 class="card-title">10,000,000
                            <small>XAF</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h3 class="card-title">Recent</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>Start date</th>
                        <th>Project</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Web Design</td>
                            <td class="text-success">Completed</td>
                            <td>
                                <button type="submit" name="send" class="btn btn-primary">Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Logo Design</td>
                            <td class="text-warning">Ongoing</td>
                            <td>
                                <button type="submit" name="send" class="btn btn-primary">Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Video Production</td>
                            <td class="text-danger">Canceled</td>
                            <td>
                                <button type="submit" name="send" class="btn btn-primary">Details</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="send" class="btn btn-primary float-right">See All</button>
                </div>
            </div>
        </div>
    </div>
@endsection
