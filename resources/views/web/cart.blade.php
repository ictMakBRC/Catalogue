@extends('web.layouts.webLayout')
@section('title', 'My cart')
@section('content')

  

            <!-- Page Header Start -->
            <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
                <div class="container">
                    <div class="title">
                        <h2 class="h1 text-white">MY REQUEST</h2>
                    </div>

                    <ul class="breadcrumb text-gray ff--primary">
                        <li><a href="home-1.html" class="btn-link">Home</a></li>
                        <li class="active"><span class="text-primary">Request</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Page Wrapper Start -->
            <section class="page--wrapper pt--80 pb--20">
                <div class="container">
                    <div class="row">
                        <!-- Main Content Start -->
                        <div class="main--content col-md-12">
                            <div class="main--content-inner">
                                <div class="row">
                                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                                        <h4 class="text-success text-center">Item list</h4>
                                        <div class="cart-items pb--60">
                                            <div class="main--content-inner drop--shadow">
                                                <!-- Topics List Start -->
                                                <div class="box--items">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" style="width:100%" id="tableEx">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item Type</th>
                                                                    <th>Specimen type</th>
                                                                    <th>Description</th>
                                                                    <th>Project</th>
                                                                    <th>&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fs--14 text-darkest">
                                                                @if(count($cartitems)>0)
                                                                @foreach($cartitems as $value)
                                                                @if($value->item =='Tissue')
                                                                <tr>
                                                                    <td data-label="Rate">
                                                                        {{ $value->item}}
                                                                    </td>
                                                                    <td data-label="Products">
                                                                        {{ $value->specimen_type}}
                                                                    </td>

                                                                    <td data-label="Total Price">
                                                                        <p>Gender: {{ $value->gender}}, 
                                                                            Age: {{ $value->age}}, 
                                                                            Ethinicity: {{ $value->ethinicity}},
                                                                            Donor Status: {{ $value->donor_status}}
                                                                        </p>
                                                                    </td>
                                                                    <td>{{$value->project_acronym}}</td>
                                                                    <td>
                                                                        <a href="{{url('cart/delete/'.$value->id)}}" class="text-danger" > <i class="fa fa-trash"></i> </a>

                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Cart Items End -->
                                    </div>
                                            @if (Route::has('login'))

                                            @auth
                                        @php
                                            $uid = auth()->user()->id;
                                            $title = auth()->user()->title;
                                            $name = auth()->user()->first_name.' '.auth()->user()->other_names;
                                            $email = auth()->user()->email;
                                            $organization = auth()->user()->organization;
                                            $position = auth()->user()->position;
                                            $contact = auth()->user()->contact;
                                            $is_user = '1';
                                        @endphp   
                                        
                                            @else
                                        
                                            @php
                                            $title = '';
                                            $uid = '';
                                            $name = '';
                                            $email = '';
                                            $organization = '';
                                            $position = '';
                                            $contact = '';
                                            $is_user = '0';
                                            @endphp 
                    
                                            @endauth
                    
                                        @endif

                                
                                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                                        <form class="form-horizontal" name="samplerequest" method='post' action="{{url('request/add')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                <font color='#008000'><b></b></font>
                                                </div>
                                            </div>
                                        
                                                <input type="hidden" value="{{$uid}}" name="uid">
                                                
                                                <input type="hidden" value="{{$guest}}" name="session" >

                                                @if($data !="")
                                                <input name="requesterip" type="hidden" class="form-control" value="{{ $data->ip }}" required autofocus>
                                                <input name="requestercounry" type="hidden" class="form-control" value="{{ $data->countryName }}"  required autofocus>
                                                <input name="requestercity" type="hidden" class="form-control" value="{{ $data->cityName }}"  required autofocus>
                                                @endif

                                                    <div class="form-group row">
                                                    <label for="inputName" class="col-sm-12 col-form-label">Full names</label>
                                                    <div class="col-sm-12">
                                                        <input name="name" type="text" value="{{$name}}" class="form-control" id="inputName" placeholder="Names" required autofocus>
                                                    </div>
                                                    <label for="inputName" class="col-sm-12 col-form-label">Your organisation</label>
                                                    <div class="col-sm-12">
                                                        <input name="organisation" value="{{$organization}}" type="text" class="form-control" id="inputName" placeholder="Your Organisation" required>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <label for="inputName" class="col-sm-12 col-form-label">Current position</label>
                                                    <div class="col-sm-12">
                                                        <input name="position" value="{{$position}}" type="text" class="form-control" id="inputName" placeholder="Your Position" required>
                                                    </div>
                                                    <label for="inputEmail" class="col-sm-12 col-form-label">Email address</label>
                                                    <div class="col-sm-12">
                                                        <input name="email" value="{{$email}}" type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <label for="inputName" class="col-sm-12 col-form-label">Request title</label>
                                                    <div class="col-sm-10">
                                                        <input name="subject" type="text" class="form-control" id="inputName" value="Requesting for Serum samples" placeholder="Request subject" required>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <label for="inputExperience" class="col-sm-12 col-form-label">Details of the sample request</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="details" class="form-control" id="inputExperience" placeholder="Please provide all necessary details about the samples you want to request" required rows=8></textarea>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <div class="text-right ">
                                                        <button class="btn btn-success " type="submit" name="samplerequest">Request Samples</button>
                                                    </div>
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Content End -->
                    </div>
                </div>
            </section>
      
       
@endsection
