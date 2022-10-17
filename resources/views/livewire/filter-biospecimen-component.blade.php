{{-- @extends('web.layouts.webLayout')
@section('title', 'Biospecimens')
@section('content') --}}
<div>
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/biobg.jpg')}}" data-overlay="0.75">
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
                            <div class="main--content-inner drop--shadow">
                                <!-- Topics List Start -->
                                <div class="box--items">
                                    <div class="row gutter--15 AdjustRow">
                                        <div class="col-md-12 col-xxs-12 col-xxs-12">
                                            <div class="widget">
                                                <h2 class="h4 fw--700 widget--title">Search for samples</h2>
                                        
                                                <!-- Buddy Finder Widget Start -->
                                                <div class="buddy-finder--widget">
                                                    <form  wire:submit.prevent="filter">
                                                        <div class="row">
                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Genger</span>
                                        
                                                                        <select name="gender" wire:model='gender' class="form-control form-sm">
                                                                            <option value="">-------</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="F">Female</option>
                                                                            <option value="other">All</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Ethninicity</span>
                                        
                                                                        <select name="lookingfor" class="form-control form-sm" >                                                                
                                                                            <option value="">--------------</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Age</span>
                                        
                                                                        <select name="age" wire:model='age' class="form-control form-sm">
                                                                            <option value="">All</option>
                                                                            <option value="0,18">18-</option>
                                                                            <option value="18,25">18 to 25</option>
                                                                            <option value="25,30">25 to 30</option>
                                                                            <option value="30,35">30 to 35</option>
                                                                            <option value="35,40">35 to 40</option>
                                                                            <option value="40,170">40+</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Type</span>
                                        
                                                                        <select wire:model="bioid" class="form-control form-sm">
                                                                            <option value="{{$bioid}}">{{$bioid}}</option>
                                                                            @foreach ($biospecimensType as $item)
                                                                                <option value="{{$item->specimen_type_id}}">{{$item->specimen_type_id}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Disease status</span>
                                        
                                                                        <select wire:model="status" class="form-control form-sm">
                                                                            <option value="">------</option>
                                                                            @forelse ($Casestatus as $item)
                                                                                <option value="{{$item->CaseControl}}">{{$item->CaseControl}}</option>
                                                                                @empty
                                                                                <option value="">------</option>
                                                                                @endforelse
                                                                                
                                                                           
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-4 col-xxs-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Study acronym</span>
                                        
                                                                        <select wire:model="project" class="form-control form-sm" >
                                                                            <option value="">------</option>
                                                                            @foreach ($study as $item)
                                                                                <option value="{{$item->ProjectAcronym}}">{{$item->ProjectAcronym}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                        
                                                            {{-- <div class="col-xs-12 d-none">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <span class="text-darker ff--primary fw--500">Filter Country</span>
                                        
                                                                        <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                                            <option value="unitedstates">United States</option>
                                                                            <option value="australia">Australia</option>
                                                                            <option value="turkey">Turkey</option>
                                                                            <option value="vietnam">Vietnam</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div> --}}
                                        
                                                            <div class="col-xs-12">
                                                                <button type="submit" class="btn btn-primary float-end">Filter</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Buddy Finder Widget End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">List of all available Biospecimens : {{$biospecimensAll}}</h2>
                                </div>

                             
                            </div>
                            <!-- Filter Nav End -->
                            <!-- Member Items Start -->
                            <div class="member--items">
                                <div class="main--content-inner drop--shadow">
                                    <!-- Topics List Start -->
                                    <div class="box--items">
                                        <div class="table-responsive">
                                            <table class="table table-striped" style="width:100%" id="tableEx2">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Study</th>
                                                        <th>Biospecimens</th>
                                                        <th>Requested</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs--14 text-darkest">
                                                    @if(count($data)>0)
                                                    @foreach($data as $key=>$value)                                                    
                                                    <form action="{{ url('cart/add') }}" method="POST">
                                                        <tr>
                                                                <td data-label="Rate">
                                                                    {{$key+1}}
                                                                </td>
                                                                <td data-label="Products"> {{ $value->ProjectAcronym}}</td>
                                                                <td>{{ $value->count}} <input type="hidden" readonly name="qty" id="qty" value="{{ $value->count}}" required></td>
                                                                <td> <input type="number" max="{{ $value->count}}" required name="required" class="form-control" style=" width:70px " id=""> 
                                                                    <input type="hidden" value="Age:{{$age}}, Gender:{{$gender}}, Case control:{{$status}}, Study:{{$project}}, Specimen:{{$bioid}}" name="details" id="">
                                                                </td>
                                                                <td> <button class="btn-success btn btn-sm" type="submit">Add To Request</button></td>
                                                            
                                                        </tr>
                                                    </form>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- Member Items End -->

                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                   @include('web.inc.tissueSidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
</div>
{{-- @endsection --}}
