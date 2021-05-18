@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="pb-3">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">more_vert</i>
                    <div class="ripple-container"></div>
                </button>
                <a class="navbar-brand" style="color:Black !important;"
                   href="invoices.html">Invoices</a>
            </div>
            <div class="card">
                <div class="card-header card-header-warning">
                    <h3 class="card-title">Invoices</h4>
                </div>
                <div class="card-body">
                    <div class="material-datatables">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                                    <thead class="text-warning" >
                                    <th>Invoice Number</th>
                                    <th>Projects</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>left</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Web Design</td>
                                        <td>150000 XAF</td>
                                        <td class="text-success">60000 XAF</td>
                                        <td class="text-danger">90000XAF</td>
                                        <td>
                                            <button type="submit" name="send" class="btn btn-primary"><a href="invoice_details.html" style="color:white !important;">Details</a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Logo Design</td>
                                        <td>150000 XAF</td>
                                        <td class="text-success">60000 XAF</td>
                                        <td class="text-danger">90000XAF</td>
                                        <td>
                                            <button type="submit" name="send" class="btn btn-primary"><a href="invoice_details.html" style="color:white !important;">Details</a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Video Production</td>
                                        <td>150000 XAF</td>
                                        <td class="text-success">60000 XAF</td>
                                        <td class="text-danger">90000XAF</td>
                                        <td>
                                            <button type="submit" name="send" class="btn btn-primary"><a href="invoice_details.html" style="color:white !important;">Details</a></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  end card  -->
            </div>
        </div>
    </div>
@endsection
