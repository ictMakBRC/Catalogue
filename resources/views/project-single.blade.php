@extends('layouts.main')
@section('title', 'Project | '.$name)
@section('content')
            <main class="site-content">
                <div class="page_header d-flex align-items-center">
                    <div class="container">
                        <section>

                            <div class="breadcrumbs">
                                <a href="#">Projects</a>
                                <span>{{$name}}</span>
                            </div>
                        </section>
                    </div>
                </div><!-- /.page_header -->
                @if(count($projects)>0)
                @foreach($projects as $value)
                <div class="service_single">
                    <div class="container">
                        <div class="row justify-content-xl-between">
                            <div class="col-xl-8">
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
                                                <p><a href="{{ url('project/view/'.$value->id.'/'.$value->pcode.'/'.$value->project_acronym) }}">{{ $value->project_acronym}}</a></p>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 pl-xl-0 asideRightFixed">
                                <aside>
                                    <div class="service-widget">
                                        <h2>Available Specimens:</h2>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont-double-right"></i>
                                                    Biospecimens: {{$biospecimens}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont-double-right"></i>
                                                    Organs: {{$biospecimens}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont-double-right"></i>
                                                    Tissues: {{$tissues}}
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="service-widget widget-download-files">
                                        <h2>Documents</h2>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont-file-pdf"></i>
                                                    Download Pdf.
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icofont-file-document"></i>
                                                    Download Doc.
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </main><!-- /.site-content -->
@endsection
