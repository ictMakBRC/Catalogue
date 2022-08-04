@extends('web.layouts.webLayout')
@section('title', 'Account')
@section('content')
        <!-- Cover Header Start -->
   
        <!-- Cover Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li><a href="{{route('myaccount')}}">Profile</a></li>
                                    <li><a href="{{route('myrequests')}}">My Requests</a></li>
                                    <li><a href="{{route('cart')}}">Cart</a></li>
                                    <li class="active"><a href="#">Request:{{$id}}</a></li>
                                     {{-- {!! QrCode::size(120)->generate($user->session) !!} --}}
                                </ul>
                            </div>
                          
                            <!-- Content Nav End -->

                            <!-- Profile Details Start -->
                         

                            <div class="profile--details fs--14">
                                <!-- Profile Item Start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="profile--item">
                                            <div class="profile--heading">
                                                <h3 class="h4 fw--700">
                                                    <span class="mr--4">Requester Details</span>
                                                    <i class="ml--10 text-primary fa fa-caret-right"></i>
                                                </h3>
                                            </div>

                                            <div class="profile--info">
                                                <table class="table">
                                                    <tr>
                                                        <th class="fw--700 text-darkest">Full Name</th>
                                                        <td><a href="#" class="btn-link">{{$user->name}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fw--700 text-darkest">Position</th>
                                                        <td>{{$user->position}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fw--700 text-darkest">Organisation</th>
                                                        <td>{{$user->organization}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>                      
                                    </div>
                                    <div class="col-md-6">
                                    <!-- Profile Item Start -->
                                        <div class="profile--item">
                                            <div class="profile--heading">
                                                <h3 class="h4 fw--700">
                                                    <span class="mr--4">Contact</span>
                                                    <i class="ml--10 text-primary fa fa-caret-right"></i>
                                                </h3>
                                            </div>

                                            <div class="profile--info">
                                                <table class="table">
                                                    <tr>
                                                        <th class="fw--700 text-darkest">Phone</th>
                                                        <td><a href="tel:+16105598246">{{$user->contact}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fw--700 text-darkest">E-mail</th>
                                                        <td><a href="mailto:demo@fakemail.com">{{$user->email}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fw--700 text-darkest">Country</th>
                                                        <td><a href="#">{{$user->country}}</a></td>
                                                    </tr>
                                                   
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-success text-center">Item list</h4>
                                <div class="cart-items pb--60">
                                        <table class="table table-striped" style="width:100%" id="tableEx">
                                            <thead>
                                                <tr>
                                                    <th>Item Type</th>
                                                    <th>Specimen type</th>
                                                    <th>Description</th>
                                                    <th>Project</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs--14 text-darkest">
                                                @if(count($requestItems)>0)
                                                @foreach($requestItems as $value)
                                                @if($value->item =='Tissue')
                                                <tr>
                                                    <td data-label="Rate">
                                                        {{ $value->item}}
                                                    </td>
                                                    <td data-label="Products">
                                                        {{ $value->specimen_type}}
                                                    </td>
    
                                                    <td data-label="Total Price">
                                                        <p>Gender: {{ $value->gender}}</p>
                                                        <p>Age: {{ $value->age}}</p>
                                                       <p>Ethinicity: {{ $value->ethinicity}}</p>
                                                       <p>Donor Status: {{ $value->donor_status}}</p>
                                                    </td>
                                                    <td>{{$value->project_acronym}}</td>
                                                   
                                                </tr>
                                                @endif
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
    
                                </div>
                                <!-- Profile Item End -->
                            </div>
                            <!-- Profile Details End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                   @include('web.inc.sidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

        <!-- Footer Section Start -->
    @endsection
