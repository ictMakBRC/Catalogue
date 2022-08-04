@extends('web.layouts.webLayout')
@section('title', 'Tissues | '.$name)
@section('content')
    <!-- Preloader End -->

    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.75">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">{{$name}}</h2>
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
                @if(count($tissues)>0)
                @foreach($tissues as $value)
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <form action="{{ url('cart/add') }}" method="POST">
                            <div class="row">


                                <div class="col-md-12 col-sm-6 pb--60">
                                    <!-- Product Summery Start -->
                                    <div class="product--summery fs--14">
                                        <div class="title">
                                            <h3 class="h4">Tissues/{{$name}}</h3>
                                        </div>

                                        <table class="table table table-bordered table-hover table-md m-4" widith="100%">
                                            <tr>
                                                <th>Project name</th>
                                                <td>{{$value->project_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Project Acronym</th>
                                                <td>{{ $value->project_acronym}}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $value->category}}</td>
                                            </tr>
                                            <tr>
                                                <th>Specimen type</th>
                                                <td>{{$value->specimen_type}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <th>Participant ID</th>
                                                <td>{{ $value->participant_id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Sample Id</th>
                                                <td>{{ $value->sample_id}}</td>
                                            </tr> --}}
                                            <tr>
                                                <th>Aliqout Type</th>
                                                <td>{{$value->aliqout_type}}</td>
                                            </tr>
                                            <tr>
                                                <th>Age</th>
                                                <td>{{ $value->age}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                 <td>{{ $value->gender}}</td>
                                            </tr>
                                            <tr>
                                                <th>BMI</th>
                                                 <td>{{$value->BMI}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ethinicity</th>
                                                 <td>{{ $value->ethinicity}}</td>
                                            </tr>
                                            <tr>
                                                <th>Collection Date</th>
                                            <td>{{ $value->collection_date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Stored For</th>
                                                <td>{{$value->stored_for}}</td>
                                            </tr>

                                        </table>



                                    </div>
                                    <input type="hidden"  value="Tissue" class="form-control" name="item_type">
                                    <input type="hidden"  value="{{ $value->sample_id}}" class="form-control" name="sample_id">
                                    <input type="hidden"  value="{{ $value->age}}" class="form-control" name="age">
                                    <input type="hidden"  value="{{ $value->ethinicity}}" class="form-control" name="ethinicity">
                                    <input type="hidden"  value="{{ $value->gender}}" class="form-control" name="gender">
                                    <input type="hidden"  value="{{ $value->specimen_type}}" class="form-control" name="specimen_type">
                                    <input type="hidden"  value="{{ $value->aliqout_type}}" class="form-control" name="aliqout_type">
                                    <input type="hidden"  value="{{ $value->donor_status}}" class="form-control" name="donor_status">
                                    <input type="hidden" name="project_acronym" value="{{$value->project_acronym}}">
                                    @csrf
                                    <button type="submit" class="btn btn-default float-center">Add To my list</button>
                                    <!-- Product Summery End -->
                                </div>
                            </div>
                </form>
                @endforeach
                @endif
                            <!-- Product Details Nav Start -->
                            <div class="product--details-nav">
                                <ul class="nav ff--primary fs--18 fw--600 text-black bg-lighter">
                                    <li class="active">
                                        <a href="#produtDetailsTab01" data-toggle="tab">Project Description</a>
                                    </li>
                                    <li>
                                        <a href="#produtDetailsTab02" data-toggle="tab">Sites of collection</a>
                                    </li>
                                    <li>
                                        <a href="#produtDetailsTab03" data-toggle="tab">Specimen Details</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Details Nav End -->

                            <!-- Product Details Start -->
                            <div class="product--details tab-content pb--60">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade in active" id="produtDetailsTab01">
                                    <div class="content--inner fs--14">
                                        <h5>{{ $value->project_name}}.</h5>
                                        <div class="mb-3">
                                            <span class="text-muted h4">Project Acronym: </span>
                                            <span class="text-info h4">{{ $value->project_acronym}}</span>
                                        </div>
                                        <span class="text-muted h5">Project Design: </span>
                                          <p class="card-text fs-6">
                                            {{ $value->project_design}}
                                          </p>
                                          <span class="text-muted h5">Project Description: </span>
                                          <p class="card-text fs-6">
                                            {{ $value->project_description}}
                                          </p>
                                          <dl class="row">
                                            <dt class="col-sm-4">Disease</dt>
                                            <dd class="col-sm-8">{{ $value->disease}}</dd>

                                            <dt class="col-sm-4">Project Funder</dt>
                                            <dd class="col-sm-8">{{$value->project_funder}}</dd>

                                            <dt class="col-sm-4">H3 Africa Affiliated</dt>
                                            <dd class="col-sm-8">{{$value->H3_africa_affiliated}}</dd>
                                          </dl>

                                    </div>
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade" id="produtDetailsTab02">
                                    <div class="content--inner fs--14">
                                        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                                            <div class="col">

                                                        <ul class="list-group">
                                                            <li class="list-group-item active" aria-current="true">Countries of collection</li>
                                                            @if(count($countries)>0)
                                                            @foreach($countries as $country)
                                                            <li class="list-group-item">{{$country->country}}</li>
                                                            @endforeach
                                                            @endif
                                                        </ul>

                                            </div>
                                            <div class="col">

                                                        <ul class="list-group">
                                                            <li class="list-group-item active" aria-current="true">Sites of collection</li>
                                                            @if(count($sites)>0)
                                                            @foreach($sites as $site)
                                                            <li class="list-group-item">{{$site->site_name}}</li>
                                                            @endforeach
                                                            @endif

                                                        </ul>

                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade" id="produtDetailsTab03">
                                    <h4 class="h4 pt--20 pb--20">Sepecimen details</h4>

                                    <!-- Review Items Start -->
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Specimen Type Name</th>
                                                <th>Storage Temperature</th>
                                                <th>ContainerType</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$value->specimen_type}}</td>
                                                <td>{{ $value->storage_temperature}}</td>
                                                <td>{{ $value->container_type}}</td>
                                            </tr>



                                        </tbody>
                                    </table>

                                    <!-- Review Form End -->
                                </div>
                                <!-- Tab Pane End -->
                            </div>
                            <!-- Product Details End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                   @include('web.inc.tissueCartSidebar')
                    <!-- Main Sidebar End -->
                </div>

                <!-- Related Products Start -->
                <div class="related--products">
                    <h3 class="h4 pb--20">Related Products</h3>

                    <div class="row AdjustRow">
                        @if(count($tissueSimi)>0)
                        @foreach($tissueSimi as $value)
                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                            <!-- Product Item Start -->
                            <div class="product--item">
                                <!-- Product Image Start -->
                                <div class="product--img">
                                    <img  src="{{url('site/img/tissues/tissueitem.jpg')}}" alt="">


                                    <div class="action">
                                        <a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}">
                                            <i class="fa fa-eye"></i>
                                            <span>View Details</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Product Image End -->

                                <!-- Product Info Start -->
                                <div class="product--info text-center">
                                    <div class="cat">
                                        <p>
                                            <a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}" class="btn-link">Uncatagory</a>
                                        </p>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="{{url('tissues/view/'.$value->tissue_id.'/'.$value->specimen_type)}}">{{ $value->aliqout_type}}</a></h2>
                                    </div>
                                    <div class="price text-darkest">
                                        <p><span class="text-default mr--15">Ethinicity</span>{{ $value->ethinicity}}</p>
                                            <p><span class="text-default mr--15">Gender</span>{{ $value->gender}}</p>
                                            <p><span class="text-default mr--15">Age</span>{{ $value->age}}</p>
                                    </div>

                                    <div class="action fs--14">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>
                            <!-- Product Item End -->
                        </div>
                        @endforeach

                        @endif


                    </div>
                </div>
                <!-- Related Products End -->
            </div>
        </section>
        <!-- Page Wrapper End -->

        <!-- Footer Section Start -->

        <!-- Footer Section End -->

    <!-- Wrapper End -->
@endsection
    <!-- Back To Top Button Start -->
