@extends('dashboard.layouts.formLayout')
@section('title', 'Dashboard')
@section('content')
			<!--page-content-->

				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Tissue</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">New</li>
								</ol>
							</nav>
						</div>
                        <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Tissue</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle options</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">

                                    <a href="{{url('catalogue/tissues')}}" class="dropdown-item">Tissue list</a>
									<div class="dropdown-divider"></div>
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#impBioSpecimen">Import CSV</a>
								</div>
							</div>
						</div>
					</div>
                    @if(count($tissues)>0)
                    @foreach($tissues as $tissue)
					<!--end breadcrumb-->
                        <div class="card">
                            <div class="card-header">Edit tissue</div>
                            <div class="card-body">
                                <br />
                                <div class="col-12 col-lg-12">
                                    <div class="card border-lg-top-success">
                                        <div class="card-body p-2">
                                            <form method="POST" action="{{ url('catalogue/tissues/add') }}"  name="myForm"  class="needs-validation"  onsubmit="return validateForm()" >
                                                @csrf
                                                <div class="form-body">
                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Project Name</label>
                                                            <div class="input-group">
                                                                <select class="single-select form-select" id="project_id" name="project_id" required>
                                                                    <option selected value="{{$tissue->project_id}}">{{ $tissue->project_name}}</option>
                                                                    @if(count($projects)>0)
                                                                    @foreach($projects as $project)
                                                                        <option value="{{ $project->project_acronym}}">{{ $project->project_name}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Project Acronym</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" readonly name="project_acronym" id="ProjectAcronym" value="{{$tissue->project_acronym}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>Category</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="category" value="{{$tissue->category}}" id="category" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Participant Id</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="participant_id" value="{{$tissue->participant_id}}" id="participant_id" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>Sample ID</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="sample_id" value="{{$tissue->sample_id}}" id="sample_id" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Specimen Type</label>
                                                            <div class="input-group">
                                                                <select class="single-select form-select" id="specimen_type"  name="specimen_type" required>
                                                                    <option value="{{$tissue->specimen_type}}">{{ $tissue->specimen_type}}</option>
                                                                    @if(count($specimentypes)>0)
                                                                    @foreach($specimentypes as $value)
                                                                        <option value="{{ $value->specimen_type}}">{{ $value->specimen_type}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label>Gender</label>
                                                            <div class="input-group">

                                                                <select type="text" class="form-control" name="gender" required id="gender" required>
                                                                    <option value="{{$tissue->gender}}">{{$tissue->gender}}</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label>Age</label>
                                                            <div class="input-group">

                                                                <input type="number" class="form-control" name="age" value="{{$tissue->age}}" id="age" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Aliqout type</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="aliqout_type" value="{{$tissue->aliqout_type}}" id="aliqout_type" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Ethinicity</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="ethinicity" value="{{$tissue->ethinicity}}" id="ethinicity" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Date Collected</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="collection_date" value="{{$tissue->collection_date}}" id="collection_date" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Donor status</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="donor_status" value="{{$tissue->donor_status}}" id="donor_status" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Stored_for</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" name="stored_for" value="{{$tissue->stored_for}}" id="stored_for" required>
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <button type="submit" class="btn btn-success px-5"><i class="bx bx-save"></i>Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
				</div>
			<!--end page-content-->
            <script>
                $(document).ready(function(){
                $('#project_id').change(function() {

                    var ProID = $(this).val();
                    $("#ProjectAcronym").empty();
                    if (ProID) {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('catalogue/getProject') }}?project_id=" + ProID,
                            success: function(response) {
                                var len = 0;
                     if(response['data'] != null){
                       len = response['data'].length;
                     }

                     if(len > 0){

                       for(var i=0; i<len; i++){

                         var acronym = response['data'][i].acronym;


                        document.getElementById('ProjectAcronym').value =acronym;


                       }
                     }
                            }
                        });
                    } else {
                        $("#ProjectAcronym").empty();
                    }
                });
            });
</script>
@include('dashboard.components.importbiospecimen')
@endsection
