
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
									<li class="breadcrumb-item active" aria-current="page">BioSpecimen</li>
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
                                                    <th>Batch Number</th>
                                                    <th>Imported by</th>
                                                    <th>No. of items</th>
                                                    <th>Date imported</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($biospecimens)>0)
                                                @php($i=1)
                                                @foreach($biospecimens as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->batch}}</td>
                                                    <td>{{ $value->name}}</td>
                                                    <td>{{ $value->biolist}}</td>
                                                    <td>{{ $value->biodate}}</td>
                                                    <td class="table-action">

                                                        <a href="{{ url('catalogue/biospecimens/imports/'.$value->batch) }}" class="action-icon btn btn-sm"> <i class="bx bx-show-alt" ></i></a>

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
                                    <h5 class="modal-title">Upload Biospecimen CSV</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('catalogue/biospecimen/import') }}" method="POST" name="importform"
                                enctype="multipart/form-data"  onsubmit="return checkfile()">
                                    <div class="modal-body">

                                            @csrf

                                            <div class="row">
                                                <div class="col-md-12">

                                                <input type="hidden" name="batch" value="{{rand(400,999).time()}}">
                                                    <div class="mb-3">
                                                        <label  class="form-label">Upload Biospecimen CSV file</label>
                                                        <input type="file" name="file" id="image-uploadify" required class="form-control" onchange="checkfile(this);">
                                                    </div>

                                                    {{-- <input id="image-uploadify" type="file" accept=".xlsx,.xls,.csv" multiple> --}}
                                                </div> <!-- end col -->

                                            </div>
                                            <script type="text/javascript" language="javascript">
                                                function checkfile(sender) {
                                                    var validExts = new Array(".xlsx", ".xls", ".csv");
                                                    var fileExt = sender.value;
                                                    fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
                                                    if (validExts.indexOf(fileExt) < 0) {

                                                               swal('Error', "Invalid file selected, valid files are of " +
                                                               validExts.toString() + " types.", 'warning');
                                                               document.getElementById('image-uploadify').value= null;
                                                      return false;

                                                    }
                                                    else return true;
                                                }
                                                </script>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    @include('dashboard.components.importbiospecimen')
    @endsection
