@extends('web.layouts.webLayout')
@section('title', 'Tissues')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.75">
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
                <div class="row">
                            <!-- Main Content Start -->
                            {{-- <div class="main--content col-md-12 pb--30">
                                <div class="main--content-inner">


                                    <!-- Page Count Start -->
                                    <div class="page--count pb--30">
                                        <label class="ff--primary fs--14 fw--500 text-darker">
                                            <span>Viewing</span>

                                            <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                            <input type="number" name="page-count" value="01" class="form-control form-sm">
                                            <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                            <span>of 28</span>
                                        </label>
                                    </div>
                                    <!-- Page Count End -->
                                </div>
                            </div> --}}
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <div class="main--content-inner drop--shadow">
                                <!-- Topics List Start -->
                                <div class="box--items">
                                    <div class="row gutter--15 AdjustRow">
                                        <div class="col-md-12 col-xxs-12 col-xxs-12">
                                            <h4 class="card-title">Our Tissue Inventory</h4>
                                            <p>Our objective is to facilitate research that will benefit study participants and the general public through making publically available the Biospecimens, Organs, Tissues and data following the necessary guidelines.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">List of all available Tissues : {{$tissuecount}}</h2>
                                </div>

                                {{-- <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="new-registered">List</option>
                                            <option value="alphabetical">Card</option>
                                        </select>
                                    </label>
                                </div> --}}
                            </div>
                            <!-- Filter Nav End -->
                           @if (isset($card))
                                <div class="row AdjustRow">
                                    @if(count($tissues)>0)
                                    @foreach($tissues as $value)
                                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30 drop--shadow">
                                            <!-- Product Item Start -->
                                            <div class="product--item  drop--shadow"  data-scroll-reveal="bottom">
                                                <!-- Product Image Start -->
                                                <div class="product--img">
                                                    <img src="{{url('site/img/tissues/tissues.jpg')}}" alt="">

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
                           @else
                            <div class="member--items">
                                <div class="main--content-inner drop--shadow">
                                    <!-- Topics List Start -->
                                    <div class="box--items">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-responsive-stack" style="width:100%" id="tableEx2">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        {{-- <th>Study</th> --}}
                                                        <th>Specimen type</th>
                                                        <th>Sample type</th>
                                                        <th>Qty</th>
                                                        <th>Temp</th>
                                                        <th>Container</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs--14 text-darkest">
                                                    @if(count($tissues)>0)
                                                    @foreach($tissues as $key=>$value)
                                                    <tr>
                                                        <td data-label="Rate">
                                                            {{$key+1}}
                                                            <a class="see-more" style="display: none">
                                                                <i class="fa fa-plus-circle "></i>
                                                              </a>
                                                        </td>
                                                        {{-- <td data-label="Products"> {{ $value->ProjectAcronym}}</td> --}}
                                                        <td data-label="Products"> {{ $value->myspecimen}}</td>
                                                        <td data-label="Products"> {{ $value->aliqout_type}}</td>
                                                        <td>{{ $value->count}}</td>
                                                        <td>{{ $value->storage_temperature ? $value->storage_temperature : 'N/A'}} &#8451</td>
                                                        <td>{{ $value->container_type ? $value->container_type : 'N/A'}}</td>
                                                        <td><a href="{{url('tissues/specimenType/'.$value->myspecimen)}}" title="View the available samples in {{ $value->myspecimen}}" class="a-tag btn-sm" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-shopping-cart"> </i> View </a></td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           @endif

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">


                                    {{$tissues->links('vendor.pagination.bootstrap-4') }}
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
