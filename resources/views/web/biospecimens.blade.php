@extends('web.layouts.webLayout')
@section('title', 'Biospecimens')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/biobg.jpg')}}" data-overlay="0.75">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">{{ Request::routeIs('covid19') ? 'Sars COV-2' : '' }} Biospecimens</h2>
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
                            <div class="main--content-inner bg-secondary drop--shadow">
                                <!-- Topics List Start -->
                                <div class="box--items">
                                    <div class="row gutter--15 AdjustRow">
                                        <div class="col-md-12 col-xxs-12 col-xxs-12">
                                            <h4 class="card-title">The {{ Request::routeIs('covid19') ? 'SARS-CoV-2' : '' }} Biospecimens Inventory</h4>
                                            <p>The Catalog is updated regularly with the latest Biospecimens data from the LIMS for all the studies at the <a href="https://www.ibru.mak.ac.ug" target="_blank">IBRH3AU Biorepository</a>. Providing you with access to a pool of well annotated Biospecimens.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">List of all the available {{ Request::routeIs('covid19') ? 'SARS-CoV-2' : '' }} Biospecimens: {{$biocount}}</h2>
                                </div>

                                {{-- <div class="filter--options float--right d-none">
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

                            <!-- Member Items Start -->
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
                                                        <th>Specimen</th>
                                                        <th>Qty</th>
                                                        <th>Temp</th>
                                                        <th>Container</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs--14 text-darkest">
                                                    @if(count($biospecimens)>0)
                                                    @foreach($biospecimens as $key=>$value)
                                                    <tr>
                                                        <td data-label="Rate">
                                                            {{$key+1}}
                                                        </td>
                                                        {{-- <td data-label="Products"> {{ $value->ProjectAcronym}}</td> --}}
                                                        <td data-label="Products"> {{ $value->myspecimen}}</td>
                                                        <td>{{ $value->count}}</td>
                                                        <td>{{ $value->storage_temperature ? $value->storage_temperature : 'N/A'}} &#8451</td>
                                                        <td>{{ $value->container_type ? $value->container_type : 'N/A'}}</td>
                                                        {{-- <td><a href="{{url('biospecimens/specimenType/'.$value->myspecimen)}}" title="View all {{ $value->myspecimen}} " class="a-tag btn-sm"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-shopping-cart"> </i> View</a></td> --}}
                                                        <td><a href="{{url('biospecimens/filter/'.$value->myspecimen)}}" title="View all {{ $value->myspecimen}} " class="a-tag btn-sm"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-shopping-cart"> </i> View</a></td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">

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
