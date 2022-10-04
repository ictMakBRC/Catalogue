@extends('web.layouts.webLayout')
@section('title', 'Biospecimens | '.$id)
@section('content')

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/biobg.jpg')}}" data-overlay="0.65">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Biospecimens</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">{{$id}}</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <h4>Projects with <span class="text-danger">{{$id}} samples</span> available</h4>
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        
                        @if(count($biospecimens)>0)
                        @php($i=1)
                        @foreach($biospecimens as $value)
                        <div class="main--content-inner drop--shadow">
                            <!-- Topics List Start -->
                            <div class="box--items">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-md-12 col-xxs-12 col-xxs-12">
                                        <div class="box--items">
                                            <div class="card-header">
                                                <h5 class="card-title"> {{ $value->project_acronym}}</h5>
                                            </div>
                                            <div class="card-body mb-20">
                                                <p> <strong>Study name:</strong> {{$value->project_name}}</p>
                                                <p class="card-text"><strong>Study design:</strong> {{ $value->project_design}}</p>
                                            </div>
                                            <br>
                                            <table class="table mt-20">
                                                <tr style="border-bottom: 2px solid #f2f4f2">
                                                    <td><b>Sample Type: </b>{{ $value->myspecimen}}</td>
                                                    <td><b>Total Available: </b>{{ $value->biocount}}</td>
                                                    <td><b>Funder: </b>{{ $value->project_funder}}</td>
                                                </tr>
                                               
                                            </table>
                                            <div class="tags--widget">
                                                <ul class="nav">
                                                    <li> <a target="_blank" href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}" data-toggle="tooltip" title="View {{$value->project_acronym}} project details" class="btn btn-default text-info">Project details<i class="icofont-arrow-right"></i></a></li>
                                                    <li class="m-"><a href="{{url('biospecimens/all/'.$id.'/'.$value->project_acronym)}}" title="{{ $value->project_acronym}} {{$id}} samples" data-toggle="tooltip" class="btn btn-default">View all</a></li>
                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <br>
                        
                        @endforeach
                        @endif

                        {{$biospecimens->links('vendor.pagination.bootstrap-4') }}
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    @include('web.inc.tissueSidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
       
        <!-- Page Wrapper End -->

        <!-- Footer Section End -->
  @endsection

