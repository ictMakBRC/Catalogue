@extends('web.layouts.webLayout')
@section('title', 'Projects')
@section('content')
    <!-- Preloader End -->

    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/project.jpg')}}" data-overlay="0.75">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">Project List</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                <li class="active"><span class="text-primary">Projects</span></li>
            </ul>
        </div>
    </div>
        <!-- Page Header End -->
       
        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
              
                <div class="row">
                    <div class="box--items">
                        <div class="row gutter--15 AdjustRow">
                                    @if(count($projects)>0)
                                    @php($i=1)
                                    @foreach($projects as $value)
                                    
                                    <div class="col-md-4 col-xs-12 col-xxs-12">
                                        <!-- Box Item Start -->
                                       
                                            <div class="box--item product--item card"  data-scroll-reveal="bottom">
          
                        
                                                <div class="info action">                                               
                        
                                                    <div class="title">
                                                        <h2 class="h6"><a href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}">{{$value->project_name}}</a></h2>
                                                    </div>
                                                    <p>Project Acronym: {{ $value->project_acronym}}</p>
                                                    <p class="card-text">{{ $value->project_description}}</p>
                                                    <div class="price text-darkest">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Disease: {{ $value->disease}}</li>
                                                            <li class="list-group-item">Funder: {{ $value->project_funder}}</li>
            
                                                        </ul>
                                                    </div>
                                                   <div class="action fs--14">
                                                    <a  href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Read more <i class="icofont-arrow-right"></i></a>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        <!-- Box Item End -->
                                    </div>

                                     @endforeach
                                    @endif
                                </div>
                                {{ $projects->links('vendor.pagination.bootstrap-4') }}
                            </div>
                </div>
            </div>
        </section>
@endsection