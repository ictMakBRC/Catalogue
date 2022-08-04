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
                                    <li class="active"><a href="#">My Request</a></li>
                                    <li><a href="">{{$user->session}}</a></li>
                                    
                                </ul>
                                {{-- {!! QrCode::size(120)->generate($user->session) !!} --}}
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
                                                    <span class="mr--4">About Me</span>
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
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">You don't have an account with us? Regiser now to keep track of your requests</h2>

                            <!-- Buddy Finder Widget Start -->
                            <div class="buddy-finder--widget">
                                <form method="POST" action="{{route('Reqregister')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div>
                                            <div class="col-xs-6 col-xxs-12">
                                                <div class="form-group">
                                                    <label>
                                                        <span class="text-darker ff--primary fw--500">Gender</span>
    
                                                        <select name="gender" class="form-control form-sm" required>
                                                            <option value="{{$user->gender !=''?$user->gender:''}}" selected>{{$user->gender!=''?$user->gender:'Select'}}</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="title2" class="form-label">Title </label>
                                                <select class="form-control form-sm" id="title2" name="title" required >
                                                    <option value="{{$user->title !=''?$user->title:''}}" selected>{{$user->title!=''?$user->title:'Select'}}</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Eng.">Eng.</option>
                                                    <option value="Prof.">Prof.</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="surname2" class="form-label">Full name</label>
                                                <input type="text" id="surname2" class="form-control form-sm" readonly name="full_name" required value="{{$user->name}}"  >
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="first_name2" class="form-label">Sur Name</label>
                                                <input type="text" id="first_name2" class="form-control form-sm" name="first_name" required value="{{$user->first_name}}" >
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="middle_name2" class="form-label">Other Names</label>
                                                <input type="text" id="middle_name2" class="form-control form-sm" name="other_names" value="{{$user->other_names}}" >
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="email2" class="form-label">Email</label>
                                                <input type="email" id="email2" readonly class="form-control form-sm" name="email" required value="{{$user->email}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="contact2" class="form-label">Contact</label>
                                                <input type="text" id="contact2" class="form-control form-sm" name="contact" required value="{{$user->contact}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Organisation</label>
                                                <input type="text" id="organization" class="form-control form-sm" name="organization" required value="{{$user->organization}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text" id="position" class="form-control form-sm" name="position" required value="{{$user->position}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" id="countryn" class="form-control form-sm" name="country" required value="{{$user->country}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" id="address" class="form-control form-sm" name="address" required value="{{$user->address}}" >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="country" class="form-label">Password</label>
                                                <input  class="form-control form-sm" type="password" name="password"  id="password" required  >
                                            </div> 
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Confirm Password</label>
                                                <input  class="form-control form-sm" type="password" id="password_confirmation" name="password_confirmation" required >
                                            </div> 
                                        </div> <!-- end col -->
                                          <input type="hidden" value="{{$user->session}}" name="code" >
                                    </div>
                                    <div class="d-grid mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"  id="submitButton2">Register</button>
                                    </div>
                                    <!-- end row--> 
                                   
                                </form>
                            </div>
                            <!-- Buddy Finder Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Notice</h2>

                            <!-- Text Widget Start -->
                            <div class="text--widget">
                                <p>The are information given is total confidential and will not be of Lorem Ipsum available, but the majority have suffered alteration in some  look even slightly believable.</p>
                            </div>
                            <!-- Text Widget End -->
                        </div>
                        <!-- Widget End -->

                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

        <!-- Footer Section Start -->
    @endsection
