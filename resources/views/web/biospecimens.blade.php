@extends('web.layouts.webLayout')
@section('title', 'Biospecimens')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/biospecimens/banner.jpg')}}" data-overlay="0.75">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Biospecimens</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Biospecimens</span></li>
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
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">All tissues : @money($biocount )</h2>
                                </div>

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

                            <!-- Member Items Start -->
                            <div class="row AdjustRow">
                                @if(count($biospecimens)>0)
                                @foreach($biospecimens as $value)
                                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                                    <!-- Product Item Start -->
                                    <div class="product--item" data-scroll-reveal="bottom">
                                        <!-- Product Image Start -->
                                        <div class="product--img">
                                            @if ($value->myspecimen =='DNA')
                                            <img src="{{url('site/img/biospecimens/dna.jpg')}}" alt="">
                                            @elseif($value->myspecimen =='Plasma')
                                            <img src="{{url('site/img/biospecimens/plasma.jpg')}}" alt="">
                                            @elseif($value->myspecimen =='Dry Blood Spots (DBS)')
                                            <img src="{{url('site/img/biospecimens/dbs.jpg')}}" alt="">
                                            @else
                                            <img src="{{url('site/img/biospecimens/biospecimen.jpg')}}" alt="">
                                            @endif
                                            

                                            <div class="action">
                                                <a href="{{url('tissues/specimenType/'.$value->myspecimen)}}">
                                                    <i class="fa fa-eye"></i>
                                                    <span>View Details</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->

                                        <!-- Product Info Start -->
                                        <div class="product--info text-center">
                                            <div class="cart">
                                                <p><i class="mr--8 fas fa-briefcase-medical"></i>Specimen Type</p>
                                            </div>
                                            <div class="name">
                                                <h3 class="h4 fs--16 text-primary">
                                                    <a href="{{url('tissues/specimenType/'.$value->myspecimen)}}" class="btn-link">{{ $value->myspecimen}}</a>
                                                </h3>
                                            </div>
                                            <div class=" text-center">
                                                <h5>Qty: {{ $value->count}}</h5>
                                            </div>

                                            <div class="action fs--14">
                                                <a href="{{url('tissues/specimenType/'.$value->myspecimen)}}" title="View available samples in {{ $value->myspecimen}}" class="btn-link" data-toggle="tooltip" data-placement="bottom">
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
                            
                            <div class="member--items">
                                <div class="row gutter--15 AdjustRow">
                                    @if(count($biospecimens)>0)
                                    @foreach($biospecimens as $value)


                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="product--img">
                                                <a href="{{url('biospecimens/specimenType/'.$value->myspecimen)}}" class="btn-link">
                                                    @if ($value->myspecimen =='DNA')
                                                    <img src="{{url('site/img/biospecimens/dna.jpg')}}" alt="">
                                                    @elseif($value->myspecimen =='Plasma')
                                                    <img src="{{url('site/img/biospecimens/plasma.jpg')}}" alt="">
                                                    @elseif($value->myspecimen =='Dry Blood Spots (DBS)')
                                                    <img src="{{url('site/img/biospecimens/dbs.jpg')}}" alt="">
                                                    @else
                                                    <img src="{{url('site/img/biospecimens/biospecimen.jpg')}}" alt="">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="activity">
                                                <p><i class="mr--8 fas fa-briefcase-medical"></i>Specimen Type</p>
                                            </div>

                                            <div class="name">
                                                <h3 class="h4 fs--16 text-primary">
                                                    <a href="{{url('biospecimens/specimenType/'.$value->myspecimen)}}" class="btn-link">{{ $value->myspecimen}}</a>
                                                </h3>
                                            </div>



                                            <div class=" text-center">
                                                <h5>Qty: {{ $value->count}}</h5>

                                            </div>
                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="{{url('biospecimens/specimenType/'.$value->myspecimen)}}" title="View the available samples in {{ $value->myspecimen}}" class="btn-link" data-toggle="tooltip" data-placement="bottom">
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
                            </div>
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    {{$biospecimens->links('vendor.pagination.bootstrap-4') }}
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
