@extends('web.layouts.webLayout')
@section('title', 'Tissues | '.$id)
@section('content')

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.65">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Tissues</h2>
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
                <ul class="subforums nav mt--10 text-darkest">
                    <li><i class="fa fa-circle-thin mr--10 text-primary"></i></li>
                    <li><a href="topics.html">Tissues</a></li>
                    <li><a href="topics.html">{{$id}}</a></li>
                </ul>
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Topics List Start -->
                            <div class="box--items">
                                <div class="row gutter--15 AdjustRow">


                                                @if(count($tissues)>0)
                                    @php($i=1)
                                    @foreach($tissues as $value)

                                    <div class="col-md-12 col-xxs-12 col-xxs-12">
                                        <div class="box--items">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$value->project_name}}</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Project Acronym: {{ $value->project_acronym}}</p>
                                                <p class="card-text">{{ $value->project_description}}</p>
                                            </div>
                                            <table class="table">
                                                <tr>
                                                    <td><b>Aliqout type:</b>{{ $value->aliqout_type}}</td>
                                                    <td><b>Available Tissues:<b>{{ $value->tcount}}</td>
                                                </tr>
                                            </table>
               
                                            <div class="card-footer">
                                                <ul class="subforums nav mt--10 text-darkest">
                                                    <li> <a target="_blank" href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Show full project record<i class="icofont-arrow-right"></i></a></li>
                                                    <li class="text-right"><a href="{{url('tissues/all/'.$id.'/'.$value->project_acronym)}}" class="btn-link text-right">View Tissues</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    @endif
                                </div>

                            </div>
                            {{$tissues->links('vendor.pagination.bootstrap-4') }}

                        </div>

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

