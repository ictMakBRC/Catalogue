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
                                    <li class="active"><a href="{{route('myrequests')}}">My Requests</a></li>
                                    <li><a href="{{route('cart')}}">Cart</a></li>
                                     {{-- {!! QrCode::size(120)->generate($user->session) !!} --}}
                                </ul>
                            </div>
                          
                            <!-- Content Nav End -->

                            <!-- Profile Details Start -->
                         

                            <div class="profile--details fs--14">
                                <!-- Profile Item Start -->
                              
                                <h4 class="text-success text-center">Item list</h4>
                                <div class="cart-items pb--60">
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="width:100%" id="tableEx">
                                            <thead>
                                                <tr>
                                                    <th>Request Code</th>
                                                    <th>Position</th>
                                                    <th>Organisation</th>
                                                    <th>Subject</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs--14 text-darkest">
                                                @if(count($requestItems)>0)
                                                @foreach($requestItems as $value)
                                                <tr>
                                                    <td> {{ $value->session}}</td>                                                                                                                        
                                                    <td>{{$value->position}}</td>
                                                    <td>{{$value->organization}}</td>
                                                    <td>{{$value->subject}}</td>                                                                                   
                                                    <td>{{$value->created_at}}</td>  
                                                    <td> <a href="{{route('myrequest',[$value->session])}}"> <i class="fa fa-eye"></i></a> </td>                                                                                 
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
