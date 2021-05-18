@extends('layouts.master')

@section ('content')
    <div class="col-md-12">
        <ul class="timeline">
            <li class="timeline">
                <div class="timeline-badge success">
                    <i class="material-icons">card_travel</i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <span class="badge badge-success">Brief</span>
                    </div>
                    <div class="timeline-body" >
                        <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus diam ac est rhoncus, sed auctor tortor porttitor. Ut pharetra purus id quam condimentum sagittis. Fusce risus turpis, euismod id diam nec, venenatis maximus dui.</p>
                        <a href="#demo"  data-toggle="collapse">Lire plus</a>
                        <div id="demo" class="collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus diam ac est rhoncus, sed auctor tortor porttitor. Ut pharetra purus id quam condimentum sagittis. Fusce risus turpis, euismod id diam nec, venenatis maximus dui.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="col-md-6" style="float:right;">
        <ul class="timeline timeline-simple" >
            <li class="timeline-inverted">
                <div class="timeline-badge success" >
                    <i class="material-icons">extension</i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <span class="badge badge-success">Draft</span>
                    </div>
                    <div class="timeline-body">
                        <p>Download PDF Presentation</p>
                        <button type="submit" name="send" class="btn btn-success float-right">Comment</button>
                        <button type="submit" name="send" class="btn btn-success float-right">Approve</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
