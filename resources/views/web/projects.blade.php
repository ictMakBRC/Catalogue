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
                <h2 class="h1 text-white">Projects List</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                <li class="active"><span class="text-primary">Projects</span></li>
            </ul>
        </div>
    </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--40 pb--20">
            <div class="container">

                <div class="row">
                    <div class="box--items">
                        <div class="row gutter--15 AdjustRow">
                                    @if(count($projects)>0)
                                    @php($i=1)
                                    @foreach($projects as $value)

                                    <div class="col-md-12 col-xs-12 col-xxs-12 pb--10">
                                        <!-- Box Item Start -->

                                            <div class="box--item product--item card"  data-scroll-reveal="bottom" style="border: 1px solid rgb(235, 228, 228); border-radius: 5px;">


                                                <div class="info action" >
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="title">
                                                                <h5><strong>Study Acronym: </strong><a href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}">{{$value->project_acronym}}</a></h5>
                                                            </div>
                                                            {{-- <h5><strong>Study design</strong></h5> --}}
                                                            <p class="card-text" style="word-wrap: break-word; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:100ch;">{{ $value->project_design}}</p>
                                                            <div class="action fs--14">
                                                                <a  href="{{ url('project/view/'.$value->pcode.'/'.$value->project_acronym) }}" class="the_permalink text-info">Read more <i class="icofont-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 sm">
                                                            {{-- <p class="card-text">{{ $value->project_description}}</p> --}}
                                                            <div class="price">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><b>Country of collection:</b>
                                                                        @forelse ($value->countries as $item)
                                                                        <a href="#">{{ $item->country}}</a>,
                                                                        @empty
                                                                            <small>No country data</small>
                                                                        @endforelse
                                                                    </li>
                                                                    <li class="list-group-item"><b>Disease:</b> <a href="#">{{ $value->disease}}</a></li>
                                                                    <li class="list-group-item"><b>Funder:</b> <a href="#">{{ $value->project_funder}}</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="tags--widget2 pb--5">
                                                                <ul class="nav">
                                                                    <li><strong>Biospecimens:&nbsp;</strong></li>
                                                                    @forelse ($value->biospecimens as $item)
                                                                    <li>
                                                                        <a href="#">{{ $item->specimen_type_id}} [{{$item->count}}]</a>
                                                                    </li>
                                                                    @empty
                                                                        <small>Study has no Biospecimens</small>
                                                                    @endforelse
                                                                </ul>
                                                            </div>
                                                        <div class="tags--widget2 pb--5">
                                                            <ul class="nav">
                                                                <li><strong>Tissues:&nbsp;</strong></li>
                                                                @forelse ($value->tissues as $item)
                                                                <li>
                                                                    <a href="#">{{ $item->specimen_type}} [{{$item->count}}]</a>
                                                                </li>
                                                                @empty
                                                                    <small>Study has no Tissues</small>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                        <div class="tags--widget2 pb--5">

                                                            <ul class="nav">
                                                                <li><strong>Organs:&nbsp;</strong></li>
                                                                @forelse ($value->organs as $item)
                                                                <li>
                                                                    <a href="#">{{ $item->specimen_type_id}} [{{$item->count}}]</a>
                                                                </li>
                                                                @empty
                                                                    <small>Study has no Organs</small>
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
