@extends('dashboard.layouts.formLayout')
@section('title', 'BioSpecimen info')
@section('content')
			<!--page-content-wrapper-->
            <div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Biospecimen</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Specimen Details</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
                @if(count($biospecimens)>0)
                @foreach($biospecimens as $value)
				 <div class="card">
					<div class="row g-0">
					  <div class="col-md-5 border-end">
                          <h4 class="m-4 text text-info">Specimen Details</h4>
                        <table class="table table table-bordered table-hover table-md m-4" widith="100%">
                            <tr>
                                <th>Project name</th>
                                <td>{{$value->project_name}}</td>
                            </tr>
                            <tr>
                                <th>Project Acronym</th>
                                <td>{{ $value->ProjectAcronym}}</td>
                            </tr>
                            <tr>
                                <th>PIT ID</th>
                                <td>{{ $value->PTID}}</td>
                            </tr>
                            <tr>
                                <th>Sample ID</th>
                                <td>{{$value->SampleID}}</td>
                            </tr>
                            <tr>
                                <th>Aliquot ID</th>
                                <td>{{ $value->AliquotID}}</td>
                            </tr>
                            <tr>
                                <th>Specimen type</th>
                                <td>{{ $value->specimen_type}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{$value->Gender}}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $value->Age}}</td>
                            </tr>
                            <tr>
                                <th>Case Control</th>
                                 <td>{{ $value->CaseControl}}</td>
                            </tr>
                            <tr>
                                <th>Visit Name</th>
                                 <td>{{$value->VisitName}}</td>
                            </tr>
                            <tr>
                                <th>Date Collected</th>
                                 <td>{{ $value->DateCollected}}</td>
                            </tr>
                            <tr>
                                <th>Project name</th>
                            <td>{{ $value->SPECIMEN_SOURCE}}</td>
                            </tr>
                            <tr>
                                <th>Source Organism</th>
                                <td>{{$value->SOURCE_ORGANISM}}</td>
                            </tr>
                            <tr>
                                <th>Purity</th>
                            <td>{{ $value->PURITY}}</td>
                            </tr>
                            <tr>
                                <th>Concentration</th>
                                <td>{{ $value->CONCENTRATION}}</td>
                            </tr>
                        </table>
					  </div>
					  <div class="col-md-7">
						<div class="card-body">
						  <h4 class="card-title">{{ $value->project_name}} Details</h4>
						  <div class="d-flex gap-3 py-3">

							  <div>142 reviews</div>
							  <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div>
						  </div>
						  <div class="mb-3">
							<span class="text-muted h4">Project Acronym: </span>
							<span class="text-info h4">{{ $value->project_acronym}}</span>
						</div>
                        <span class="text-muted h5">Project Design: </span>
						  <p class="card-text fs-6">
                            {{ $value->project_design}}
                          </p>
                          <span class="text-muted h5">Project Description: </span>
						  <p class="card-text fs-6">
                            {{ $value->project_description}}
                          </p>
						  <dl class="row">
							<dt class="col-sm-4">Disease</dt>
							<dd class="col-sm-8">{{ $value->disease}}</dd>

							<dt class="col-sm-4">Project Funder</dt>
							<dd class="col-sm-8">{{$value->project_funder}}</dd>

							<dt class="col-sm-4">H3 Africa Affiliated</dt>
							<dd class="col-sm-8">{{$value->H3_africa_affiliated}}</dd>
						  </dl>
						  <hr>
                          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                            <div class="col">

                                        <ul class="list-group">
                                            <li class="list-group-item active" aria-current="true">Countries of collection</li>
                                            @if(count($countries)>0)
                                            @foreach($countries as $country)
                                            <li class="list-group-item">{{$country->country}}</li>
                                            @endforeach
                                            @endif
                                        </ul>

                            </div>
                            <div class="col">

                                        <ul class="list-group">
                                            <li class="list-group-item active" aria-current="true">Sites of collection</li>
                                            @if(count($sites)>0)
                                            @foreach($sites as $site)
                                            <li class="list-group-item">{{$site->site_name}}</li>
                                            @endforeach
                                            @endif

                                        </ul>

                            </div>
                          </div>

                          <div class="row mt-2">
                            <span class="text-muted h4">Project objectives: </span>
                            <div class="col-md-12">
                                <ol>
                                    @if(count($objectives)>0)
                                    @foreach($objectives as $objective)
                                    <li class="">{{$objective->objective_name}}</li>
                                    @endforeach
                                    @endif
                                </ol>
                            </div>
                          </div>

						</div>
					  </div>
					</div>
                    <hr/>
					<div class="card-body">
						<ul class="nav nav-tabs nav-primary mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title h6"> Specimen Type Description </div>
									</div>
								</a>
							</li>

						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Specimen Type Name</th>
                                                <th>Storage Temperature</th>
                                                <th>ContainerType</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$value->specimen_type}}</td>
                                                <td>{{ $value->storage_temperature}}</td>
                                                <td>{{ $value->container_type}}</td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
							</div>

						</div>
					</div>

				</div>
                @endforeach
                @endif



			</div>

			<!--end page-content-wrapper-->
@endsection
