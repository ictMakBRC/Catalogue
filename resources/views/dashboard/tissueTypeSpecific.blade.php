
    @extends('dashboard.layouts.tableLayout')
    @section('title', 'Specimen Types')
    @section('content')
                <div class="page-content">
					<!--breadcrumb-->
                    <div class="page-breadcrumb  d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Tissues</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;">Sample Type</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">{{$id}}</li>
								</ol>
							</nav>
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
                                                    <th>Project Funder</th>
                                                    <th>Aliqout type</th>
                                                    <th>No. Of Tissues</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($tissues)>0)
                                                @php($i=1)
                                                @foreach($tissues as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td><a data-toggle="tooltip" data-placement="top" title="{{ $value->project_description}}"> {{$value->project_name}}</a></td>
                                                    <td>{{ $value->project_funder}}</td>

                                                    <td>{{$value->aliqout_type}}</td>
                                                    <td>{{ $value->tcount}}</td>
                                                    <td class="table-action">

                                                        <a href="{{ url('catalogue/tissues/project/view/'.$value->bio_id) }}" class="action-icon"> <i class="bx bx-show" ></i></a>


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
