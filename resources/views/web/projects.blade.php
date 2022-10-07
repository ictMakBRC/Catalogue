@extends('web.layouts.webLayout')
@section('title', 'Projects')
@section('content')
    <!-- Preloader End -->

<style>
    .desc {
     max-width: 80ch;
     padding: 20px;
     /*border: 1px solid #fed;*/
     }
 
     .desc p {
     overflow: hidden;
     display: -webkit-box;
     -webkit-line-clamp: 3;
     -webkit-box-orient: vertical;
     }
 </style>
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
                                    
                                    <div class="col-md-12 col-xs-12 col-xxs-12">
                                        <!-- Box Item Start -->
                                       
                                            <div class="box--item product--item card"  data-scroll-reveal="bottom">

                        
                                                <div class="info action">  
                                                    <div class="row">
                                                        <div class="col-md-3 desc">
                                                            <div class="title">
                                                                <h2 class="h6">Project Acronym:<a href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}">{{$value->project_acronym}}</a></h2>
                                                            </div>
                                                            <h5><strong>Study design:</strong></h5>
                                                            <p class="card-text">{{ $value->project_design}}</p>
                                                            <div class="action fs--14">
                                                                <a  href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Read more <i class="icofont-arrow-right"></i></a>                                                                   
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            {{-- <p class="card-text">{{ $value->project_description}}</p> --}}
                                                            <div class="price text-darkest">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><b>Country of collection:</b> <br>
                                                                        @forelse ($value->countries as $item) 
                                                                        <a href="#">{{ $item->country}}</a>, 
                                                                        @empty
                                                                            <small>No country data</small>
                                                                        @endforelse
                                                                    </li>
                                                                    <li class="list-group-item"><b>Collection Sites:</b> <br>
                                                                        @forelse ($value->sites as $item) 
                                                                        <a href="#">{{ $item->site_name}}</a>, 
                                                                        @empty
                                                                            <small>No site data</small>
                                                                        @endforelse
                                                                    </li>
                                                                    <li class="list-group-item"><b>Disease:</b> {{ $value->disease}}</li>
                                                                    <li class="list-group-item"><b>Funder:</b> {{ $value->project_funder}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>Biospecimens</p>
                                                            <div class="tags--widget2 pb--10">
                                                                <ul class="nav">
                                                                    @forelse ($value->biospecimens as $item) 
                                                                    <li> 
                                                                        <a href="#">{{ $item->specimen_type_id}} &nbsp; <small>qty</small>({{$item->count}})</a>
                                                                    </li>
                                                                    @empty
                                                                        <small>No Biospecimen samples found</small>
                                                                    @endforelse
                                                                </ul>
                                                            </div>
                                                            <br>
                                                        <div class="tags--widget2 pb--5">                                                            
                                                            <p>Tissues</p>
                                                            <ul class="nav">
                                                                @forelse ($value->tissues as $item) 
                                                                <li> 
                                                                    <a href="#">{{ $item->specimen_type}} &nbsp; <small>qty</small>({{$item->count}})</a>
                                                                </li>
                                                                @empty
                                                                    <small>No Tissue Samples found</small>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                        <br>
                                                        <div class="tags--widget2 pb--5">                                                            
                                                            <p>Organs</p>
                                                            <ul class="nav">
                                                                @forelse ($value->organs as $item) 
                                                                <li> 
                                                                    <a href="#">{{ $item->specimen_type_id}} &nbsp; <small>qty</small>({{$item->count}})</a>
                                                                </li>
                                                                @empty
                                                                    <small>No organ Samples found</small>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                        </div>
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
@push('scripts')

@endpush
<script>
    var para = document.getElementsByClassName('desc-text')[0];
    var text = para.innerHTML;
    para.innerHTML = '';
    var wordz = text.split(" ");
    for( i = 0; i<30; i++){
        para.innerHTML +=wordz[i] + = " ";
    }
    para.innerHTML += "...";
</script>