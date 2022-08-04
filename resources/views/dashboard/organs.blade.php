
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
									<li class="breadcrumb-item active" aria-current="page">Organs</li>
								</ol>
							</nav>
						</div>
                        <div class="ml-auto">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Specimentype">+ Specimen Type</button>
                        </div>

					</div>
					<!--end breadcrumb-->

                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <x-tableheader />
                                                 </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($organs)>0)
                                                @php($i=1)
                                                @foreach($organs as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->project_id}}</td>
                                                    <td>{{ $value->ProjectAcronym}}</td>
                                                    <td>{{ $value->PTID}}</td>
                                                    <td>{{$value->SampleID}}</td>
                                                    <td>{{ $value->AliquotID}}</td>
                                                    <td>{{ $value->specimen_type_id}}</td>
                                                    <td>{{$value->Gender}}</td>
                                                    <td>{{ $value->Age}}</td>
                                                    <td>{{ $value->CaseControl}}</td>


                                                    <td>{{$value->VisitName}}</td>
                                                    <td>{{ $value->DateCollected}}</td>
                                                    <td>{{ $value->SPECIMEN_SOURCE}}</td>
                                                    <td>{{$value->SOURCE_ORGANISM}}</td>
                                                    <td>{{ $value->PURITY}}</td>
                                                    <td>{{ $value->CONCENTRATION}}</td>

                                                    <td>@if($value->is_active==1)
                                                        <span class="badge badge-success float-center">Active</span>
                                                        @php($satate='Active' AND $Stvalue=1)
                                                        @elseif($value->is_active==0)
                                                        <span class="badge badge-danger float-center">InActive</span>
                                                        @php($satate='InActive' AND $Stvalue=0)
                                                        @endif
                                                    </td>

                                                    <td class="table-action">
                                                        <a class="action-icon" data-toggle="modal" data-target="#Specimentype{{$value->id}}"><i class="bx bx-edit"></i></a>
                                                        <div class="modal fade" id="Specimentype{{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit {{$value->specimen_type}} info</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="{{ url('catalogue/specimenTypes/update/'.$value->id) }}" method="POST">
                                                                        <div class="modal-body">

                                                                                @csrf

                                                                                <div class="row">
                                                                                    <div class="col-md-12">


                                                                                        <div class="mb-3">
                                                                                            <label  class="form-label">Specimen type</label>
                                                                                            <input type="text" id="specimen_type" value="{{$value->specimen_type}}" name="specimen_type" class="form-control"  required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label">Storage temperature</label>
                                                                                            <input type="text" id="storage_temperature" value="{{$value->storage_temperature}}" name="storage_temperature" class="form-control"  required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label  class="form-label">Container type</label>
                                                                                            <input type="text" id="container_type" value="{{$value->container_type}}" name="container_type" class="form-control"  required>
                                                                                        </div>
                                                                                    </div> <!-- end col -->

                                                                                </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/specimenTypes/delete/'.$value->id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
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
                    <div class="modal fade" id="Specimentype" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add a new specimen type</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('catalogue/specimenTypes/add') }}" method="POST">
                                    <div class="modal-body">

                                            @csrf

                                            <div class="row">
                                                <div class="col-md-12">


                                                    <div class="mb-3">
                                                        <label  class="form-label">Specimen type</label>
                                                        <input type="text" id="specimen_type" name="specimen_type" class="form-control"  required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Storage temperature</label>
                                                        <input type="text" id="storage_temperature" name="storage_temperature" class="form-control"  required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label  class="form-label">Container type</label>
                                                        <input type="text" id="container_type" name="container_type" class="form-control"  required>
                                                    </div>
                                                </div> <!-- end col -->

                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

    @endsection
