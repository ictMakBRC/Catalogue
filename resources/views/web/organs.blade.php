@extends('web.layouts.webLayout')
@section('title', 'Organs')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/organbg.jpg')}}" data-overlay="0.75">
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
                <div class="row">

                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <div class="main--content-inner drop--shadow">
                                <!-- Topics List Start -->
                                <div class="box--items">
                                    <div class="row gutter--15 AdjustRow">
                                        <div class="col-md-12 col-xxs-12 col-xxs-12">
                                            <h4 class="card-title">Available Organs</h4>
                                            <p>Many ailments that were once incurable such as infertility, sickle cell anaemia, leukaemia, kidney and liver failure have been addressed through tissue or organ donation. Through our collaborations involving organ donation organizations and transplantation programs across Africa we are working
                                                to increase organ and tissue donation, access to transplants and improve patient care.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">List of all available Organs : {{$organcount}}</h2>
                                </div>

                                {{-- <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="new-registered">New Registerd</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div> --}}
                            </div>
                            <!-- Filter Nav End -->

                            <div class="row AdjustRow">
                                @if(count($organs)>0)
                                @foreach($organs as $value)
                                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--30 drop--shadow">
                                        <!-- Product Item Start -->
                                        <div class="product--item drop--shadow"  data-scroll-reveal="bottom">
                                            <!-- Product Image Start -->
                                            <div class="product--img">
                                                @if ($value->myspecimen =='Kidney')
                                                <img src="{{url('site/img/organs/Kidney.jpg')}}" alt="">
                                                @elseif ($value->myspecimen =='Liver')
                                                <img src="{{url('site/img/organs/Liver.jpg')}}" alt="">
                                                @elseif ($value->myspecimen =='Cornea')
                                                <img src="{{url('site/img/organs/cornea.jpg')}}" alt="">
                                                @elseif ($value->myspecimen =='Bone marrow')
                                                <img src="{{url('site/img/organs/bone_marrow.jpg')}}" alt="">
                                                @else
                                                <img src="{{url('site/img/organs/organ.jpg')}}" alt="">
                                                @endif
                                                <div class="action">
                                                    <a href="{{url('organs/specimenType/'.$value->myspecimen)}}">
                                                        <i class="fa fa-eye"></i>
                                                        <span>View Details</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->

                                            <!-- Product Info Start -->
                                            <div class="product--info text-center">

                                                <div class="name">
                                                    <h3 class="h4 fs--16 text-primary">
                                                        <a href="{{url('organs/specimenType/'.$value->myspecimen)}}" class="btn-link">{{ $value->myspecimen}}</a>
                                                    </h3>
                                                </div>
                                                <div class=" text-center">
                                                    <h5>Qty: {{ $value->count}}</h5>
                                                </div>

                                                <div class="actionn fs--14">
                                                    <a href="{{url('organs/specimenType/'.$value->myspecimen)}}"  class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-eye"></i> View all
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Product Info End -->
                                        </div>
                                        <!-- Product Item End -->
                                    </div>
                                @endforeach
                                @endif

                            </div>
                            <!-- Member Items Start -->
                            {{-- <div class="member--items d-none">
                                <div class="row gutter--15 AdjustRow">
                                    @if(count($Organs)>0)
                                    @foreach($Organs as $value)


                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="{{url('Organs/specimenType/'.$value->myspecimen)}}" class="btn-link">
                                                    <img src="{{url('site/img/Organs/organ.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="activity">
                                                <p><i class="mr--8 fas fa-briefcase-medical"></i>Specimen Type</p>
                                            </div>
                                            <div class="name">
                                                <h3 class="h4 fs--16 text-primary">
                                                    <a href="{{url('Organs/specimenType/'.$value->myspecimen)}}" class="btn-link">{{ $value->myspecimen}}</a>
                                                </h3>
                                            </div>
                                            <div class=" text-center">
                                                <h5>Qty: {{ $value->count}}</h5>
                                            </div>
                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="{{url('Organs/specimenType/'.$value->myspecimen)}}" title="View available samples in {{ $value->myspecimen}}" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-eye"></i> View all
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>
                                    @endforeach
                                    @endif


                                </div>
                            </div> --}}
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">

                                    {{$organs->links('vendor.pagination.bootstrap-4') }}
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                   @include('web.inc.tissueSidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>

        @endsection
