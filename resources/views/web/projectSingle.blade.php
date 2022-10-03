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

                                                    <h2 class="the_service_title">Project details</h2>
                                                    <span><strong class="h4"> Study acronym</strong>: {{$value->project_acronym}}</span><br>
                                                    <span><strong class="h4"> Study name</strong>: {{$value->project_name}}</span><br>
                                                    <span class="h4">Study Design: </span>
                                        <p class="card-text fs-6">
                                            {{ $value->project_design}}
                                        </p>
                                        <hr>
                                        <br>
                                        <span class=" h4 mt-4">Study Description: </span>
                                        <p class="card-text fs-6">
                                            {{ $value->project_description}}
                                        </p>
                                        <p><strong>Disease:</strong> {{ $value->disease}}</p>
                                        <p><strong>Funder:</strong> {{$value->project_funder}}</p>
                                        <p><strong>H3Africa Affiliated:</strong> {{$value->H3_africa_affiliated}}</p>
                 
                                        <hr>
                                                @if(count($countries)>0)
                                                <span class=" h4 mt-4">Country of collection:</span>
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
                                                    <hr>
                                                    <div class="row mt-xl-5 mt-3 mb-125">
                                                        <h3 class="text-center"> Other Projects</h3>
                                                        @if(count($otherprojects)>0)
                                                        @php($i=1)
                                                        @foreach($otherprojects as $value)
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="team-member">

                                                                <h4><a href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}">{{$value->project_name}}</a></h4>
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
                                                    <li><a href=""> Biospecimens <span class="count">({{$biospecimens}})</span></a></li>
                                                    <li><a href="">Organs <span class="count">(0)</span></a></li>
                                                    <li><a href="{{url('tissues/all/'.$value->project_acronym)}}">Tissues <span class="count">({{$tissues}})</span></a></li>

                                                </ul>
                                            </div>
                                            <div class="service-widget widget-download-files mt--20">
                                                <h2 class="h4 fw--700 widget--title">Study Publications</h2>
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
                                    @if (isset($blank))                                        
                                    <button onclick="back()" class="btn btn-info">Done</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <!-- Main Content End -->

                </div>
            </div>
        </section>
        <script>
             function back() {
              window.close();
            } 
        </script>

        @endsection
