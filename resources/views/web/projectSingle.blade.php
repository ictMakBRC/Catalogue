@extends('web.layouts.webLayout')
@section('title', 'Project')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/project.jpg')}}" data-overlay="0.55">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">{{$name}}</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web/web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Project</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        @if(count($projects)>0)
                        @foreach($projects as $value)
                        <div class="main--content--inner">
                            <div class="container">
                                <div class="row justify-content-xl-between">
                                    <div class="col-md-9">
                                                <div class="single_service_content">

                                                    <h2 class="the_service_title">{{ $value->project_name}} Details</h2>
                                                    <span class=" h4">Project Design: </span>
                                        <p class="card-text fs-6">
                                            {{ $value->project_design}}
                                        </p>
                                        <hr>
                                        <br>
                                        <span class=" h4 mt-4">Project Description: </span>
                                        <p class="card-text fs-6">
                                            {{ $value->project_description}}
                                        </p>
                                        <dl class="row mt-4">
                                            <dt class="col-sm-4">Disease</dt>
                                            <dd class="col-sm-8">{{ $value->disease}}</dd>

                                            <dt class="col-sm-4">Project Funder</dt>
                                            <dd class="col-sm-8">{{$value->project_funder}}</dd>

                                            <dt class="col-sm-4">H3 Africa Affiliated</dt>
                                            <dd class="col-sm-8">{{$value->H3_africa_affiliated}}</dd>
                                        </dl>
                                        <hr>
                                                @if(count($countries)>0)
                                                <span class=" h4 mt-4">Collection countries </span>
                                                    <ul>
                                                        @foreach($countries as $country)
                                                        <li class="">{{$country->country}}</li>
                                                        @endforeach
                                                    </ul>
                                                    @endif

                                                    @if(count($sites)>0)
                                                    <span class=" h4">Collection Sites: </span>
                                                    <ul>
                                                        @foreach($sites as $site)
                                                        <li >{{$site->site_name}}</li>
                                                        @endforeach

                                                    </ul>
                                                    @endif

                                                    @if(count($objectives)>0)
                                                    <span class=" h4">Project objectives: </span>
                                                    <ol style="list-style: circle">
                                                    @foreach($objectives as $objective)
                                                    <li class="">-{{$objective->objective_name}}</li>
                                                    @endforeach
                                                    </ol>
                                                    @endif
                                                    <div class="row mt-xl-5 mt-3 mb-125">
                                                        @if(count($otherprojects)>0)
                                                        @php($i=1)
                                                        @foreach($otherprojects as $value)
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="team-member">

                                                                <h4><a href="{{ url('project/view/'.$value->id.'/'.$value->pcode.'/'.$value->project_acronym) }}">{{$value->project_name}}</a></h4>
                                                                <p><a href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}">{{ $value->project_acronym}}</a></p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @endif

                                                    </div>
                                                </div>
                                    </div>
                                    <div class="main--sidebar col-md-3 pb--60" data-trigger="stickyScroll">
                                        <div class="widget">
                                            <h2 class="h4 fw--700 widget--title">Available Specimens:</h2>

                                            <div class="links--widget">
                                                <ul class="nav">
                                                    <li><a href="sub-forums.html"> Biospecimens: <span class="count">>({{$biospecimens}})</span></a></li>
                                                    <li><a href="sub-forums.html">Organs <span class="count">(07)</span></a></li>
                                                    <li><a href="sub-forums.html">Tissues <span class="count">({{$tissues}})</span></a></li>

                                                </ul>
                                            </div>
                                            <div class="service-widget widget-download-files">
                                                <h2 class="h4 fw--700 widget--title">Documents</h2>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-file-pdf"></i>
                                                            Download Pdf.
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-file-document"></i>
                                                            Download Doc.
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick="back()" class="btn btn-info">Done</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->

                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <script>
             function back() {
              window.close();
            } </script>

        @endsection
