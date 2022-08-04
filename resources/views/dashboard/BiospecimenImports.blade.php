
    @extends('dashboard.layouts.tableLayout')
    @section('title', 'Specimen Types')
    @section('content')
                <div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb  d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">BioSpecimens</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">BioSpecimen impots</li>
								</ol>
							</nav>
						</div>

                        <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Bio-Specimen Action</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <a href="{{url('catalogue/biospecimens')}}" class="dropdown-item">Biospecimen list</a>
									<div class="dropdown-divider"></div>
                                    <a href="{{url('catalogue/biospecimen/new')}}" class="dropdown-item">New BioSpecimen</a>
									<div class="dropdown-divider"></div>
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#impBioSpecimen">Import CSV</a>
								</div>
							</div>
						</div>

					</div>
					<!--end breadcrumb-->

                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Project</th>
                                                    <th>ProjectAcronym</th>
                                                    <th>PTID</th>
                                                    <th>Sample Id</th>
                                                    <th>AliquotID</th>
                                                    <th>SpecimenType</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th>Case/Control</th>
                                                    <th>VisitName</th>
                                                    <th>DateCollected</th>
                                                    <th>SPECIMEN_SOURCE</th>
                                                    <th>SOURCE_ORGANISM</th>
                                                    <th>PURITY</th>
                                                    <th>CONCENTRATION</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($biospecimens)>0)
                                                @php($i=1)
                                                @foreach($biospecimens as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->project_name}}</td>
                                                    <td>{{ $value->ProjectAcronym}}</td>
                                                    <td>{{ $value->PTID}}</td>
                                                    <td>{{$value->SampleID}}</td>
                                                    <td>{{ $value->AliquotID}}</td>
                                                    <td>{{ $value->specimen_type}}</td>
                                                    <td>{{$value->Gender}}</td>
                                                    <td>{{ $value->Age}}</td>
                                                    <td>{{ $value->CaseControl}}</td>
                                                    <td>{{$value->VisitName}}</td>
                                                    <td>{{ $value->DateCollected}}</td>
                                                    <td>{{ $value->SPECIMEN_SOURCE}}</td>
                                                    <td>{{$value->SOURCE_ORGANISM}}</td>
                                                    <td>{{ $value->PURITY}}</td>
                                                    <td>{{ $value->CONCENTRATION}}</td>
                                                    <td class="table-action">
                                                        @if($value->is_active==1)
                                                        <span class="badge badge-success float-center">Active</span>
                                                        @php($satate='Active' AND $Stvalue=1)
                                                        @elseif($value->is_active==0)
                                                        <span class="badge badge-danger float-center">InActive</span>
                                                        @php($satate='InActive' AND $Stvalue=0)
                                                        @endif
                                                        <a href="{{ url('catalogue/biospecimen/edit/'.$value->bio_id) }}" class="action-icon"> <i class="bx bx-edit" ></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/biospecimen/delete/'.$value->bio_id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
                                                           <!-- ADD NEW Category Modal -->

                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
				    </div>
                    @include('dashboard.components.importbiospecimen')

    @endsection
