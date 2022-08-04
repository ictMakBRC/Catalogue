@extends('layouts.main')
@section('title', 'Projects')
@section('content')

					<!--end row-->
                    <main class="site-content">
                        <div class="page_header d-flex align-items-center">
                            <div class="container">
                                <section>
                                    <h2>Our Projects.</h2>
                                    <div class="breadcrumbs">
                                        <a href="#">Home</a>
                                        <span>Projects</span>
                                    </div>
                                </section>
                            </div>
                        </div><!-- /.page_header -->



                        <div class="team-section mb-125">

                            <div class="container-lg px-lg-0">
                                <div class="row equal-cols">
                                    @if(count($projects)>0)
                                    @php($i=1)
                                    @foreach($projects as $value)

                                    <div class="col-12 col-lg-4 col-xl-4 mt-2">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$value->project_name}}</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Project Acronym: {{ $value->project_acronym}}</p>
                                                <p class="card-text">{{ $value->project_description}}</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Disease: {{ $value->disease}}</li>
                                                <li class="list-group-item">Funder: {{ $value->project_funder}}</li>

                                            </ul>
                                            <div class="card-footer">
                                                <a  href="{{ url('project/view/'.$value->id.'/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Read more <i class="icofont-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    @endif
                                </div>
                                {{ $projects->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div><!-- /.team-section -->
                    </main><!-- /.site-content -->
          @endsection
