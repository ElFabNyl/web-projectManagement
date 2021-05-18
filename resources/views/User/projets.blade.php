@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header card-header-warning">
            <h3 class="card-title">Projects</h4>
        </div>
        <div class="card-body">
            <div class="material-datatables">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                            <thead class="text-warning" >
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
                                    <button type="submit" name="send" class="btn btn-primary">
                                        <a href="{{ route('new-projets') }}" style="color:white !important;">Details</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Logo Design</td>
                                <td class="text-warning">Ongoing</td>
                                <td>
                                    <button type="submit" name="send" class="btn btn-primary">
                                        <a href="{{ route('new-projets') }}" style="color:white !important;">Details</a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Video Production</td>
                                <td class="text-danger">Canceled</td>
                                <td>
                                    <button type="submit" name="send" class="btn btn-primary">
                                        <a href="{{ route('new-projets') }}" style="color:white !important;">Details</a>
                                    </button>
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
@endsection
