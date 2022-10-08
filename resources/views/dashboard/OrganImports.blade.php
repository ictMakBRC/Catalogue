
    @extends('dashboard.layouts.tableLayout')
    @section('title', 'Specimen Types')
    @section('content')
                <div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb  d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Organs</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Organ impots</li>
								</ol>
							</nav>
						</div>

                        <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Bio-Specimen Action</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <a href="{{url('catalogue/Organs')}}" class="dropdown-item">Organ list</a>
									<div class="dropdown-divider"></div>
                                    <a href="{{url('catalogue/Organ/new')}}" class="dropdown-item">New Organ</a>
									<div class="dropdown-divider"></div>
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#importOrgan">Import CSV</a>
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
                                                    <th>Ethinicity</th>
                                                    <th>BMI</th>
                                                    <th>DateCollected</th>
                                                    <th>Donor_Sample_Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($organs)>0)
                                                @php($i=1)
                                                @foreach($organs as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->project_name}}</td>
                                                    <td>{{ $value->ProjectAcronym}}</td>
                                                    <td>{{ $value->ParticipantID}}</td>
                                                    <td>{{$value->SampleID}}</td>
                                                    <td>{{ $value->Aliqout}}</td>
                                                    <td>{{ $value->specimen_type_id}}</td>
                                                    <td>{{$value->Gender}}</td>
                                                    <td>{{ $value->Age}}</td>
                                                    <td>{{ $value->Ethinicity}}</td>
                                                    <td>{{$value->BMI}}</td>
                                                    <td>{{ $value->CollectionDate}}</td>
                                                    <td>{{ $value->Donor_Sample_Status}}</td>
                                                    <td class="table-action">
                                                        @if($value->is_active==1)
                                                        <span class="badge badge-success float-center">Active</span>
                                                        @php($satate='Active' AND $Stvalue=1)
                                                        @elseif($value->is_active==0)
                                                        <span class="badge badge-danger float-center">InActive</span>
                                                        @php($satate='InActive' AND $Stvalue=0)
                                                        @endif
                                                        <a href="{{ url('catalogue/Organ/edit/'.$value->bio_id) }}" class="action-icon"> <i class="bx bx-edit" ></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/Organ/delete/'.$value->bio_id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
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
                    @include('dashboard.components.importorgan')

    @endsection
