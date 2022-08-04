
    @extends('dashboard.layouts.tableLayout')
    @section('title', 'Request List')
    @section('content')
                <div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb  d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Request List</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Request List</li>
								</ol>
							</nav>
						</div>


                        <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Request List</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle options</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">

                                    <a href="{{url('catalogue/tissues/new')}}" class="dropdown-item">New Tissues</a>
									<div class="dropdown-divider"></div>
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#impTissues">Import Tissue CSV</a>
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
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>position</th>
                                                    <th>organisation</th>
                                                    <th>subject</th>
                                                    {{-- <th>details</th> --}}
                                                    {{-- <th>requestrip</th>
                                                    <th>requestercounry</th>
                                                    <th>requestercity</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($requests)>0)
                                                @php($i=1)
                                                @foreach($requests as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{ $value->name}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->position}}</td>
                                                    <td>{{ $value->organisation}}</td>
                                                    <td>{{$value->subject}}</td>
                                                    
                                                    <td class="table-action">
                                                        @if($value->state==1)
                                                        <span class="badge badge-success float-center">Reviewed</span>
                                                        @php($satate='Active' AND $Stvalue=1)
                                                        @elseif($value->state==0)
                                                        <span class="badge badge-danger float-center">Not-Reviewed</span>
                                                        @php($satate='InActive' AND $Stvalue=0)
                                                        @endif
                                                        <a href="{{ url('catalogue/request/edit/'.$value->request_id) }}" class="action-icon"> <i class="bx bx-edit" ></i></a>
                                                        <a href="{{ url('catalogue/request/view/'.$value->request_id) }}" class="action-icon"> <i class="bx bx-show" ></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/request/delete/'.$value->request_id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
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
                 

    @endsection
