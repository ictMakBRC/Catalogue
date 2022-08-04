
    @extends('dashboard.layouts.tableLayout')
    @section('title', 'Tissue Imports')
    @section('content')
                <div class="page-content">
					<!--breadcrumb-->

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
                                                    <th>Category</th>
                                                    <th>Specimen_type</th>
                                                    <th>Participant_id</th>
                                                    <th>Sample_id</th>
                                                    <th>Aliqout_type</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th>BMI</th>
                                                    <th>Ethinicity</th>
                                                    <th>Collection_date</th>
                                                    <th>Donor_status</th>
                                                    <th>Stored_for</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($tissues)>0)
                                                @php($i=1)
                                                @foreach($tissues as $value)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->project_name}}</td>
                                                    <td>{{ $value->project_acronym}}</td>
                                                    <td>{{ $value->category}}</td>
                                                    <td>{{$value->specimen_type}}</td>
                                                    <td>{{ $value->participant_id}}</td>
                                                    <td>{{ $value->sample_id}}</td>
                                                    <td>{{$value->aliqout_type}}</td>
                                                    <td>{{ $value->gender}}</td>
                                                    <td>{{ $value->age}}</td>
                                                    <td>{{$value->BMI}}</td>
                                                    <td>{{ $value->ethinicity}}</td>
                                                    <td>{{ $value->collection_date}}</td>
                                                    <td>{{$value->donor_status}}</td>
                                                    <td>{{ $value->stored_for}}</td>
                                                    <td class="table-action">
                                                        @if($value->is_active==1)
                                                        <span class="badge badge-success float-center">Active</span>
                                                        @php($satate='Active' AND $Stvalue=1)
                                                        @elseif($value->is_active==0)
                                                        <span class="badge badge-danger float-center">InActive</span>
                                                        @php($satate='InActive' AND $Stvalue=0)
                                                        @endif
                                                        <a href="{{ url('catalogue/tissues/edit/'.$value->tissue_id) }}" class="action-icon"> <i class="bx bx-edit" ></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('catalogue/tissues/delete/'.$value->tissue_id) }}"  data-toggle="tooltip" title="Delete!" class="action-icon"> <i class="bx bx-trash"></i></a>
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
