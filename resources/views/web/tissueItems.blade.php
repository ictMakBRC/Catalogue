@extends('web.layouts.webLayout')
@section('title', 'Tissues')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Tissues</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Tissues</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                @include("dashboard.components.messages")
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">Tissues/<span class="text-info">{{$specimen}}</span>/<span class="text-primary ">{{$project}}</span> : {{$tissuecount}}</h2>
                                </div>

                                {{-- {{ Session::get('guest') }} --}}
                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="new-registered">New Registerd</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->
                            <div class="main--content col-md-12 pb--30">
                            <!-- Member Items Start -->

                            <div class="box--items">
                                <div class="row AdjustRow">
                                    @if(count($tissues)>0)
                                    @foreach($tissues as $value)

                                    <div class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <form action="{{ url('cart/add') }}" method="POST">
                                            @csrf
                                            <div class="box--item product--item text-center"  data-scroll-reveal="bottom">
                                                <a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}" class="img" data-overlay="0.5">
                                                    <img  src="{{url('site/img/tissues/tissueitem.jpg')}}" alt="">

                                                </a>

                                                <div class="info action">
                                                    <a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}" class="icon fs--4 text-lightest bg-primary">
                                                        View
                                                    </a>

                                                    <div class="title">
                                                        <h2 class="h6"><a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}">{{ $value->aliqout_type}}</a></h2>
                                                    </div>

                                                    <div class="price text-darkest">
                                                        <p><span class="text-default mr--15">Ethinicity</span>{{ $value->ethinicity}}</p>
                                                            <p><span class="text-default mr--15">Gender</span>{{ $value->gender}}</p>
                                                            <p><span class="text-default mr--15">Age</span>{{ $value->age}}</p>
                                                    </div>
                                                    @if (Route::has('login'))
                                                    @auth
                                                    <input type="hidden" value="{{auth()->user()->email}}" class="form-control" name="email">
                                                    @else
                                                    <input type="hidden" class="form-control" name="email">
                                                    @endauth
                                                    @endif
                                                    <input type="hidden"  value="Tissue" class="form-control" name="item_type">
                                                    <input type="hidden"  value="{{ $value->sample_id}}" class="form-control" name="sample_id">
                                                    <input type="hidden"  value="{{ $value->age}}" class="form-control" name="age">
                                                    <input type="hidden"  value="{{ $value->ethinicity}}" class="form-control" name="ethinicity">
                                                    <input type="hidden"  value="{{ $value->gender}}" class="form-control" name="gender">
                                                    <input type="hidden"  value="{{ $value->specimen_type}}" class="form-control" name="specimen_type">
                                                    <input type="hidden"  value="{{ $value->aliqout_type}}" class="form-control" name="aliqout_type">
                                                    <input type="hidden"  value="{{ $value->donor_status}}" class="form-control" name="donor_status">
                                                    <input type="hidden" name="project_acronym" value="{{$value->project_acronym}}">
                                                    <div class="action fs--14">
                                                        <button class="btn-success btn btn-sm" type="submit">Add To Request</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Box Item End -->
                                    </div>

                                    @endforeach

                                    @endif



                                </div>
                            </div>
                           </div>
                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    {{$tissues->links('vendor.pagination.bootstrap-4') }}
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->
                    @include('web.inc.tissueCartSidebar')

                </div>
            </div>
        </section>

        @endsection
