
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
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Tissues</li>
								</ol>
							</nav>
						</div>


                        <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Bio-Specimen</button>
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
                                                    <th>Batch Number</th>
                                                    <th>Imported by</th>
                                                    <th>No. of items</th>
                                                    <th>Date imported</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($tissues)>0)
                                                @php($i=1)
                                                @foreach($tissues as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->batch_No}}</td>
                                                    <td>{{ $value->name}}</td>
                                                    <td>{{ $value->list}}</td>
                                                    <td>{{ $value->tissuedate}}</td>
                                                    <td class="table-action">

                                                        <a href="{{ url('catalogue/tissues/imports/'.$value->batch_No) }}" class="action-icon btn btn-sm"> <i class="bx bx-show-alt" ></i></a>

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

                    @include('dashboard.components.importTissues')
    @endsection
