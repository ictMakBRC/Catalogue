@extends('dashboard.layouts.formLayout')
@section('title', 'Dashboard')
@section('content')
			<!--page-content-->

				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Biospecimen</div>
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
								<button type="button" class="btn btn-primary">Bio-Specimen</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle options</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">

                                    <a href="{{url('catalogue/biospecimens')}}" class="dropdown-item">Biospecimen list</a>
									<div class="dropdown-divider"></div>
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#impBioSpecimen">Import CSV</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card">
						<div class="card-header">Form Wizard</div>
						<div class="card-body">
							<br />
                            <div class="col-12 col-lg-12">
                                <div class="card border-lg-top-success">
                                    <div class="card-body p-2">
                                        <form method="POST" action="{{ url('catalogue/biospecimen/add') }}"  name="myForm"  class="needs-validation"  onsubmit="return validateForm()" >
                                            @csrf
                                            <div class="form-body">
                                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Project Name</label>
                                                        <div class="input-group">
                                                            <select class="single-select form-select" id="project_id" name="project_id" required>
                                                                <option value="">Select</option>
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

                                                            <input type="text" class="form-control" name="ProjectAcronym" id="ProjectAcronym" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label>PTID</label>
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="PTID" id="PTID" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Sample ID</label>
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="SampleID" id="SampleID" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                        <label>Aliquot ID</label>
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="AliquotID" id="AliquotID" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Sample Type</label>
                                                        <div class="input-group">
                                                            <select class="single-select form-select" id="specimen_type_id" name="specimen_type_id" required>
                                                                <option value="">Select</option>
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

                                                            <select type="text" class="form-control" name="Gender" required id="Gender" required>
                                                                <option value="">select</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Age</label>
                                                        <div class="input-group">

                                                            <input type="number" class="form-control" name="Age" id="Age" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Case Control</label>
                                                        <div class="input-group">

                                                            <input type="number" class="form-control" name="CaseControl" id="CaseControl" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Visit Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="VisitName" id="VisitName" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Date Collected</label>
                                                        <div class="input-group">

                                                            <input type="date" class="form-control" name="DateCollected" id="DateCollected" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Specimen Source</label>
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="SPECIMEN_SOURCE" id="SPECIMEN_SOURCE" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Source organism</label>
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="SOURCE_ORGANISM" id="SOURCE_ORGANISM" required>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Purity</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="PURITY" id="PURITY" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Concentartion</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="CONCENTRATION" id="CONCENTRATION" required>
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
                       // Read data and create <option >
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
