@extends('dashboard.layouts.formLayout')
@section('title', 'Project New')
@section('content')
			<!--page-content-->

				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Project</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Project</li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="card">
						<div class="card-header">Project details</div>
						<div class="card-body">
							<br />


                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-11 col-sm-9 col-md-12  p-2 mt-3 mb-2">
                                        <div class="">

                                            <div id="msform">

                                                @if(count($projects)>0)
                                                  @foreach($projects as $project)
                                                  @php
                                                    $step= $project->step;
                                                    $step=1;
                                                    if ($step == 1)
                                                    {
                                                      $act1="active";
                                                      $act2="";
                                                      $act3="";
                                                      $act4="";
                                                    }
                                                    elseif ($step == 2)
                                                    {
                                                      $act1="";
                                                      $act2="active";
                                                      $act3="";
                                                      $act4="";
                                                    }
                                                    elseif ($step == 3)
                                                    {
                                                      $act1="";
                                                      $act2="";
                                                      $act3="active";
                                                      $act4="";
                                                    }
                                                    elseif ($step == 4)
                                                    {
                                                      $act1="";
                                                      $act2="";
                                                      $act3="";
                                                      $act4="active";
                                                    }
                                                  @endphp
                                                  @endforeach
                                                  @else
                                                  @php
                                                      $act1="active";
                                                      $act2="";
                                                      $act3="";
                                                      $act4="";
                                                  @endphp
                                                  @endif
                                                <!-- progressbar -->
                                                <ul id="progressbar"  class="text-center">
                                                    <li class="{{$act1}}" id="account"><strong>Project Info</strong></li>
                                                    <li class="{{$act2}}" id="personal"><strong>Collection Sites</strong></li>
                                                    <li class="{{$act3}}" id="payment"><strong>project objectives/Publications</strong></li>
                                                    <li class="{{$act4}}" id="confirm"><strong>Finish</strong></li>
                                                </ul>
                                                <div class="progress text-center">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> <br> <!-- fieldsets -->
                                                <fieldset>
                                                    @if(count($projects)>0)
                                                    @php
                                                    @endphp
                                                      @foreach($projects as $project)
                                                      @php($id=$project->id)
                                                       <form method="POST" action="{{ url('catalogue/projects/update/'.$project->id) }}"  name="myForm"  class="needs-validation"  onsubmit="return validateForm()" >
                                                        @csrf
                                                        <div class="col-12 col-lg-12">
                                                            <div class="card border-lg-top-danger">
                                                                <div class="card-body p-5">
                                                                    <div class="card-title d-flex align-items-center">
                                                                        <div><i class='bx bxs-home mr-1 font-24 text-danger'></i>
                                                                        </div>
                                                                        <h4 class="mb-0 text-danger">Project Details</h4>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="form-body">

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label>Project name</label>
                                                                                <div class="form-group">

                                                                                    <input type="text" class="form-control" name="project_name" value="{{$project->project_name}}" placeholder="project_name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project acronym</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="project_acronym" value="{{$project->project_acronym}}" placeholder="project_acronym">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Country Of Collection</label>
                                                                                <div class="input-group">
                                                                                    <select class="single-select form-select" name="country_of_collection">
                                                                                        <option value="{{$project->country_of_collection}}">{{$project->country_of_collection}}</option>
                                                                                       @include("dashboard.components.countries")
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project design</label>

                                                                                <div class="form-group">
                                                                                    <textarea class="form-control" name="project_design" name="project_design" rows="2" cols="2">{{$project->project_design}}</textarea>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Disease</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="disease" value="{{$project->disease}}" placeholder="disease">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project funder</label>
                                                                                <div class="form-group">

                                                                                    <input type="text" class="form-control" name="project_funder" value="{{$project->project_funder}}" placeholder="project_funder">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>H3 Africa affiliated</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="H3_africa_affiliated" value="{{$project->H3_africa_affiliated}}" placeholder="H3_africa_affiliated">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Project description</label>
                                                                            <textarea class="form-control" name="project_description" placeholder="project_description" rows="5" cols="3">{{$project->project_description}}</textarea>
                                                                        </div>
                                                                        <input type="hidden" required class="form-control" name="pcode"value="{{$code}}">
                                                                        <button type="submit" class="btn btn-info px-5 float-right">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    @endforeach
                                                    <input type="button" name="next" class="next action-button" value="Next" />
                                                    @else
                                                    @php($id='')
                                                    <form method="POST" action="{{ url('catalogue/projects/add') }}"  name="myForm"  class="needs-validation"  onsubmit="return validateForm()" >
                                                        @csrf
                                                        <div class="col-12 col-lg-12">
                                                            <div class="card border-lg-top-danger">
                                                                <div class="card-body p-5">
                                                                    <div class="card-title d-flex align-items-center">
                                                                        <div><i class='bx bxs-home mr-1 font-24 text-success'></i>
                                                                        </div>
                                                                        <h4 class="mb-0 text-danger">Project Details</h4>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="form-body">

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label>Project name</label>
                                                                                <div class="form-group">

                                                                                    <input type="text" class="form-control" name="project_name" placeholder="project_name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project acronym</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="project_acronym" placeholder="project_acronym">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project Country</label>
                                                                                <div class="input-group">
                                                                                    <select class="single-select form-select" name="country_of_collection">
                                                                                        <option value="">Select a Category</option>
                                                                                       @include("dashboard.components.countries")
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project design</label>
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control" name="project_design" placeholder="project_design" rows="2" cols="2"></textarea>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Disease</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="disease" placeholder="disease">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Project funder</label>
                                                                                <div class="form-group">

                                                                                    <input type="text" class="form-control" name="project_funder" placeholder="project_funder">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>H3 Africa affiliated</label>
                                                                                <div class="input-group">

                                                                                    <input type="text" class="form-control" name="H3_africa_affiliated" placeholder="H3_africa_affiliated">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Project description</label>
                                                                            <textarea class="form-control" name="project_description" placeholder="project_description" rows="3" cols="3"></textarea>
                                                                        </div>
                                                                        <input type="hidden" required class="form-control" name="pcode"value="{{$code}}">
                                                                        <button type="submit" class="btn btn-info px-5 float-right">Create</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    @endif
                                                </fieldset>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <div class="card">
                                                                <form class="p-2" method="POST" action="{{ url('catalogue/countries/add') }}">
                                                                    @csrf
                                                                    <input type="hidden" required class="form-control" name="project_code" value="{{$code}}">
                                                                    <input type="hidden" required class="form-control" name="project_id" value="{{$id}}">
                                                                    <label>Country Of Collection</label>
                                                                    <div class="form-group">
                                                                        <select class="single-select form-select" required name="country">
                                                                            <option value="">Select a Country</option>
                                                                           @include("dashboard.components.countries")
                                                                        </select>

                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary btn-block">+ Add country</button>
                                                                </form>
                                                                <div class="card-body">
                                                                    <h5 class="my-3">Country of collection</h5>
                                                                    <div class="fm-menu">

                                                                            @if(count($countries)>0)
                                                                            @foreach($countries as $country)
                                                                            <div class="btn-group mt-1">
                                                                                <button type="button" class="btn btn-default">{{$country->country}}</button>
                                                                                <button type="button" class="btn btn-default bg-split-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">

                                                                                    <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/countries/delete/'.$country->id) }}"  class="dropdown-item"> <i class="mdi mdi-delete"></i> Delete</a>
                                                                                </div>
                                                                            </div>

                                                                            @endforeach
                                                                            @else
                                                                            <div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item py-1"><i class='bx bx-folder mr-2'></i><span>Add countries</span></a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-12 col-lg-8">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="fm-search">
                                                                        <form class="p-2" method="POST" action="{{ url('catalogue/sites/add') }}">
                                                                            @csrf
                                                                            <input type="hidden" required class="form-control" name="project_code" value="{{$code}}">
                                                                            <input type="hidden" required class="form-control" name="project_id" value="{{$id}}">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Site name</label>
                                                                                    <div class="form-group">

                                                                                        <input type="text" class="form-control" required name="site_name" placeholder="site_name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Country Of Collection</label>
                                                                                    <div class="form-group">
                                                                                        <select class="single-select form-select" name="country_name" required>
                                                                                            <option value="">Select a Country</option>
                                                                                           @include("dashboard.components.countries")
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary btn-block">+ Add site</button>
                                                                        </form>

                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <h5 class="mb-0">Collection sites</h5>
                                                                        </div>

                                                                    </div>
                                                                    <div class="table-responsive mt-3">
                                                                        <table class="table table-striped table-hover table-sm mb-0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name <i class='bx bx-up-arrow-alt ml-2'></i>
                                                                                    </th>
                                                                                    <th>Country</th>
                                                                                    <th>Action</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @if(count($sites)>0)
                                                                                @foreach($sites as $site)
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <div><i class='bx bxs-file mr-2 font-24 text-success'></i>
                                                                                            </div>
                                                                                            <div class="font-weight-bold text-mute">{{$site->site_name}}</div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{$site->country_name}}</td>
                                                                                    <td><i class='bx bx-dots-horizontal-rounded font-24'></i>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach

                                                                                @else
                                                                                <tr>
                                                                                    <td colspan="3">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <div><i class='bx bxs-file mr-2 font-24 text-success'></i>
                                                                                            </div>
                                                                                            <div class="font-weight-bold text-mute">No collection sites yet</div>
                                                                                        </div>
                                                                                    </td>

                                                                                </tr>
                                                                                @endif
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    <!--end row-->
                                                     <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="card">
                                                                <form class="p-2" method="POST" action="{{ url('catalogue/countries/add') }}">
                                                                    @csrf
                                                                    <input type="hidden" required class="form-control" name="project_code" value="{{$code}}">
                                                                    <input type="hidden" required class="form-control" name="project_id" value="{{$id}}">
                                                                    <label>Project Publications</label>
                                                                    <div class="form-group">


                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary btn-block">+ Add publication</button>
                                                                </form>
                                                                <div class="card-body">
                                                                    <h5 class="my-3">Project Publications</h5>
                                                                    <div class="fm-menu">

                                                                            @if(count($publications)>0)
                                                                            @foreach($publications as $publication)


                                                                            @endforeach
                                                                            @else
                                                                            <div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item py-1"><i class='bx bx-folder mr-2'></i><span>Publications</span></a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="fm-search">
                                                                        <form class="p-2" method="POST" action="{{ url('catalogue/objectives/add') }}">
                                                                            @csrf
                                                                            <input type="hidden" required class="form-control" name="project_code" value="{{$code}}">
                                                                            <input type="hidden" required class="form-control" name="project_id" value="{{$id}}">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12">
                                                                                    <label>Objective</label>
                                                                                    <div class="form-group">
                                                                                        <textarea class="form-control" required name="objective_name" cols="3" rows="3"></textarea>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary btn-block">+ Add</button>
                                                                        </form>

                                                                    </div>
                                                                    <div>
                                                                        <h5 class="mt-2">Project Objectives</h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">

                                                                        <ul class="list-group">
                                                                            @if(count($objectives)>0)
                                                                        @foreach($objectives as $objective)
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">{{$objective->objective_name}}
                                                                            <span class="badge bg-danger rounded-pill"> <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/objective/delete/'.$objective->id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a></span>
                                                                        </li>
                                                                        @endforeach

                                                                        @else

                                                                        @endif

                                                                        </ul>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    <!--end row-->
                                                     <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="fs-title">Finish:</h2>
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 4 - 4</h2>
                                                            </div>
                                                        </div> <br><br>
                                                        <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                        <div class="row justify-content-center">
                                                            {{-- <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div> --}}
                                                        </div> <br><br>
                                                     @foreach($projects as $value)
                                                        <div class="col-md-12">
                                                            <div class="card-body">
                                                              <h4 class="card-title">{{ $value->project_name}} Details</h4>

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
                                                              <hr>
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

                                                              <div class="row mt-2">
                                                                <span class="text-muted h4">Project objectives: </span>
                                                                <div class="col-md-12">
                                                                    <ol>
                                                                        @if(count($objectives)>0)
                                                                        @foreach($objectives as $objective)
                                                                        <li class="">{{$objective->objective_name}}</li>
                                                                        @endforeach
                                                                        @endif
                                                                    </ol>
                                                                </div>
                                                              </div>

                                                            </div>
                                                        </div>
                                                       @endforeach
                                                          <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5 class="purple-text text-center">Project Successfully created</h5>
                                                                <a href="{{url('catalogue/projects/new/'.mt_rand(5000, 5999).time())}}" class="btn btn-success">Create a new Project</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			<!--end page-content-->

@endsection
