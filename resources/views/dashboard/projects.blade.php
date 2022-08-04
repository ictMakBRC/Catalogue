
				@extends('dashboard.layouts.tableLayout')
                @section('title', 'Project')
                @section('content')
                <div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Tables</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">

                        <a href="{{url('catalogue/projects/new/'.mt_rand(5000, 5999).time())}}" class="btn btn-primary">New Project</a>
                        <!-- Modal -->
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
                                                    <th>Project Name</th>
                                                    <th>Project acronym</th>
                                                    <th>Project funder</th>
                                                    <th>Disease</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($projects)>0)
                                                @php($i=1)
                                                @foreach($projects as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->project_name}}</td>
                                                    <td>{{ $value->project_acronym}}</td>
                                                    <td>{{ $value->project_funder}}</td>
                                                    <td>{{ $value->disease}}</td>
                                                    <td>{{ $value->status}}</td>

                                                    <td class="table-action">

                                                        <a href="{{url('catalogue/projects/new/'.$value->pcode) }}" class="action-icon"> <i class="bx bx-edit" ></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('inventory/item/delete/'.$value->id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
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
