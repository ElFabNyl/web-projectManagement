@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header card-header-icon card-header-info pb-5">
            <div class="card-icon">
                <i class="material-icons">timeline</i>
            </div>
                <h4 class="card-title">Company Name</h4>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="card-body pt-4 pb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h4><b>Billed to</b></h4>
                            <p>Dereck Agendia</p>
                            <p>dereckagendia1@gmail1.com</p>
                            <p>699486948</p>
                        </div>
                        <div class="col-md-4">
                            <h4><b>Date</b></h4>
                            <p>2/2/2022</p>
                        </div>
                        <div class="col-md-4">
                            <h4><b>Invoice</b></h4>
                            <p>1234567890</p>
                        </div>
                    </div> <hr>
                    <div class="row pt-2">
                        <div class="col-md-12">
                            <h4><b>Project Description</b></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, recusandae. Aut adipisci quae perspiciatis unde amet tenetur pariatur in illum sequi voluptas officiis, esse cupiditate? Earum, ullam. Exercitationem, praesentium quisquam! Aut adipisci quae perspiciatis unde amet tenetur pariatur in illum sequi voluptas officiis, esse cupiditate? Earum,
                                ullam. Exercitationem, praesentium quisquam!</p>
                        </div>
                    </div><hr>
                    <div class="row pt-2">
                        <div class="col-md-4">
                            <h4><b>Total Amount</b></h4>
                            <h3><b>150,000 XAF</b> </h3>
                        </div>
                        <div class="col-md-4">
                            <h4><b>Amount Paid</b></h4>
                            <h3 class="text-success"><b>60,000 XAF</b> </h3>
                        </div>
                        <div class="col-md-4">
                            <h4><b>Amount left</b></h4>
                            <h3 class="text-danger"><b>90,000 XAF</b></h3>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </div>
    </div>
@endsection
