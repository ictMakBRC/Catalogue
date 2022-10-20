@extends('web.layouts.webLayout')
@section('title', 'Organs')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Organs</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Organs</span></li>
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
                                    <h2 class="h4">Organs/<span class="text-info">{{$specimen}}</span>/<span class="text-primary ">{{$project}}</span> : {{$organcount}}</h2>
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
                                    @if(count($organs)>0)
                                    @foreach($organs as $value)
                        
                                    <div class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <form action="{{ url('cart/add') }}" method="POST">
                                            @csrf
                                            <div class="box--item product--item text-center"  data-scroll-reveal="bottom">
                                                <a href="{{url('organs/view/'.$value->organ_id.'/'.$value->specimen_type)}}" class="img" data-overlay="0.5">
                                                    <img  src="{{url('site/img/organs/item.jpg')}}" alt="">
                        
                                                </a>
                        
                                                <div class="info action">
                                                    <a href="{{url('organs/view/'.$value->organ_id.'/'.$value->specimen_type)}}" class="icon fs--4 text-lightest bg-primary">
                                                        View
                                                    </a>
                        
                                                    <div class="title">
                                                        <h2 class="h6"><a href="{{url('organs/view/'.$value->organ_id.'/'.$value->specimen_type)}}">{{ $value->aliqout_type}}</a></h2>
                                                    </div>
                        
                                                    <div class="price text-darkest">
                                                        <p><span class="text-default mr--15">Ethinicity</span>{{ $value->Ethinicity}}</p>
                                                            <p><span class="text-default mr--15">Gender</span>{{ $value->Gender}}</p>
                                                            <p><span class="text-default mr--15">Age</span>{{ $value->Age}}</p>
                                                    </div>
                                                    @if (Route::has('login'))
                                                    @auth
                                                    <input type="hidden" value="{{auth()->user()->email}}" class="form-control" name="email">
                                                    @else
                                                    <input type="hidden" class="form-control" name="email">
                                                    @endauth
                                                    @endif
                                                    <input type="hidden"  value="Organ" class="form-control" name="item_type">
                                                    <input type="hidden"  value="1" class="form-control" name="quantity">
                                                    <input type="hidden"  value="{{ $value->SampleID}}" class="form-control" name="sample_id">
                                                    <input type="hidden"  value="{{ $value->Age}}" class="form-control" name="age">
                                                    <input type="hidden"  value="{{ $value->Ethinicity}}" class="form-control" name="ethinicity">
                                                    <input type="hidden"  value="{{ $value->Gender}}" class="form-control" name="gender">
                                                    <input type="hidden"  value="{{ $value->specimen_type_id}}" class="form-control" name="specimen_type">
                                                    <input type="hidden"  value="{{ $value->Aliqout}}" class="form-control" name="aliqout_type">
                                                    <input type="hidden"  value="{{ $value->Donor_Sample_Status}}" class="form-control" name="donor_status">
                                                    <input type="hidden" name="project_acronym" value="{{$value->project_acronym}}">
                                                    <input type="hidden" value="Age:{{ $value->Age}}, Gender:{{ $value->Gender}}, Donor_State:{{ $value->Donor_Sample_Status}}, Study:{{$value->project_acronym}}, Specimen:{{$value->specimen_type}}" name="details" id="">
                                                    <div class="action fs--14">
                                                        @if ($cartitems->where('sample_id',$value->SampleID)->count())
                                                        <button class="btn-success btn btn-sm" disabled type="submit">Already in cart</button>
                                                        @else
                                                        <button class="btn-success btn btn-sm" type="submit">Add To Request</button>
                                                        @endif
                                                       
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
                        
                                    {{$organs->links('vendor.pagination.bootstrap-4') }}
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
