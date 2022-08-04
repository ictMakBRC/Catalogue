@extends('dashboard.layouts.mainLayout')
@section('title', 'Dashboard')
@section('content')
			<!--page-content-wrapper-->

				<div class="page-content">
					<div class="card radius-10">
                        <div class="card-content">
                            <div class="row row-group row-cols-1 row-cols-xl-4">
                                <div class="col">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0">Biospecimens</p>
                                                <h4 class="mb-0 text-primary">{{$biospecimens}}</h4>
                                            </div>
                                            <div class="ml-auto"></i><i class=" font-35 text-primary lni lni-microscope"></i>
                                            </div>
                                        </div>

                                        <p class="mb-0 text-muted mt-3">
                                            <a href="{{url('catalogue/biospecimens')}}" class="text-nowrap">View all</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0">Organs</p>
                                                <h4 class="mb-0 text-danger">{{$biospecimens}}</h4>
                                            </div>
                                            <div class="ml-auto"></i><i class=" font-35 text-danger bx bx-show-alt"></i>
                                            </div>
                                        </div>

                                        <p class="mb-0 text-muted mt-3">
                                            <a href="{{url('catalogue/organs')}}" class="text-nowrap">View all</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0">Tissues</p>
                                                <h4 class="mb-0 text-success">{{$tissues}}</h4>
                                            </div>
                                            <div class="ml-auto"></i><i class=" font-35 text-success bx bx-badge"></i>
                                            </div>
                                        </div>

                                        <p class="mb-0 text-muted mt-3">
                                            <a href="{{url('catalogue/tissues')}}" class="text-nowrap">View all</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0">Specimens types</p>
                                                <h4 class="mb-0 text-info">{{$specimenTypes}}</h4>
                                            </div>
                                            <div class="ml-auto"></i><i class=" font-35 text-info bx bx-test-tube"></i>
                                            </div>
                                        </div>

                                        <p class="mb-0 text-muted mt-3">
                                            <a href="{{url('catalogue/specimentypes')}}" class="text-nowrap">View all</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    @if(count($biospecimentypes)>0)
					<div class="row">
						<div class="col-12 col-lg-12 d-flex align-items-stretch">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Biospecimens groups</h5>
										</div>
										<div class="dropdown ml-auto">
											<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>

									<div class="row mt-3">


                                        @foreach($biospecimentypes as $biovalue)
										<div class="col-12 col-lg-3">
											<div class="card radius-15 bg-info">
												<div class="card-body">
													<div class="media align-items-center text-white">
														<div class="media-body">
															<p class="text-bold mb-0">{{ $biovalue->myspecimen}}</p>
															<h4 class="mb-0 ">{{ $biovalue->biocount}}</h4>
														</div>
                                                        <div class="ml-auto"><a href="{{url('catalogue/biospecimens/type/'.$biovalue->myspecimen)}}"><i class=" font-35 text-primary bx bx-chevron-right-circle"></i></a>
                                                        </div>
													</div>
												</div>
											</div>
										</div>

                                        @endforeach




									</div>
                                    {{ $biospecimentypes->links('vendor.pagination.bootstrap-4') }}
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
                    @endif

                    @if(count($tissuetypes)>0)
					<div class="row">
						<div class="col-12 col-lg-12 d-flex align-items-stretch">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Tissue groups</h5>
										</div>
										<div class="dropdown ml-auto">
											<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>

									<div class="row mt-3">


                                        @foreach($tissuetypes as $tvalue)
										<div class="col-12 col-lg-3">
											<div class="card radius-15 bg-success">
												<div class="card-body">
													<div class="media align-items-center text-white">
														<div class="media-body">
															<p class="text-bold mb-0">{{ $tvalue->myspecimen}}</p>
															<h4 class="mb-0 ">{{ $tvalue->count}}</h4>
														</div>
                                                        <div class="ml-auto"><a href="{{url('catalogue/tissues/type/'.$tvalue->myspecimen)}}"><i class=" font-35 text-danger bx bx-chevron-right-circle"></i></a>
                                                        </div>
													</div>
												</div>
											</div>
										</div>

                                        @endforeach




									</div>
                                    {{ $tissuetypes->links('vendor.pagination.bootstrap-4') }}
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
                    @endif

					<div class="row">
                        <div class="col-12 col-lg-12 d-flex align-items-stretch">
                            <div class="card radius-15 w-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <h5 class="mb-0">Recent Imports</h5>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
                                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mt-2">
                                            <div class="card radius-15">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">Biospecimens</h5>

                                                    </div>
                                                    @foreach($bioimports as $bioimport)
                                                    <div class="media align-items-center mt-3">
                                                        <div class="media-body ml-3">
                                                            <p class="font-weight-bold mb-0">Batch No.: <a href="{{ url('catalogue/biospecimens/imports/'.$bioimport->batch) }}"  class="text-info">{{$bioimport->batch}}</a></p>
                                                            <p class="text-secondary mb-0">Imported By: {{$bioimport->uname}}</p>
                                                        </div> <a href="{{ url('catalogue/biospecimens/imports/'.$bioimport->batch) }}"  class="btn btn-sm btn-light-primary radius-10">{{$bioimport->biolist}}</a>
                                                    </div>
                                                    <hr>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-2">
                                            <div class="card radius-15">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">Tissues</h5>

                                                    </div>
                                                    @foreach($tissueimports as $timport)
                                                    <div class="media align-items-center mt-3">
                                                        <div class="media-body ml-3">
                                                            <p class="font-weight-bold mb-0">Batch No.: <a href="{{ url('catalogue/tissues/imports/'.$timport->batch_No) }}"  class="text-info">{{$timport->batch_No}}</a></p>
                                                            <p class="text-secondary mb-0">Imported By: {{$timport->name}}</p>
                                                        </div> <a href="{{ url('catalogue/tissues/imports/'.$timport->batch_No) }}"  class="btn btn-sm btn-light-primary radius-10">{{$timport->list}}</a>
                                                    </div>
                                                    <hr>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
					</div>
				</div>

			<!--end page-content-wrapper-->
@endsection
