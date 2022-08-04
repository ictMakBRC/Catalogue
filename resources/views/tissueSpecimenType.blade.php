@extends('layouts.main')
@section('title', 'Projects')
@section('content')

					<!--end row-->
                    <main class="site-content">
                        <div class="page_header d-flex align-items-center">
                            <div class="container">
                                <section>
                                    <h2>Tissues</h2>
                                    <div class="breadcrumbs h4">
                                        <a href="#">Specimen Type</a>
                                        <span>{{$id}}</span>
                                    </div>
                                </section>
                            </div>
                        </div><!-- /.page_header -->



                        <div class="team-section mb-125">
                            <div>
                                <div class="col-xl-10 text-center">
                                    <h2>{{$id}} Tissues</h2>
                                </div>
                            </div>

                            <div class="container-lg px-lg-0">
                                <div class="row equal-cols">
                                    @if(count($tissues)>0)
                                    @php($i=1)
                                    @foreach($tissues as $value)

                                    <div class="col-12 col-lg-12 col-xl-12 mt-2">
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
                                                <li class="list-group-item">No. of Biospecimen: {{ $value->tcount}}</li>

                                            </ul>
                                            <div class="card-footer">
                                                <a  href="{{ url('project/view/'.$value->id.'/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Read more <i class="icofont-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    @endif
                                </div>
                                {{$tissues->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div><!-- /.team-section -->
                    </main><!-- /.site-content -->
          @endsection
