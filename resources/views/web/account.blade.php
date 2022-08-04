@extends('web.layouts.webLayout')
@section('title', 'Account')
@section('content')
        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="img/cover-header-img/bg-01.jpg" data-overlay="0.6" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="img/cover-header-img/avatar-01.jpg" alt="">
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">{{auth()->user()->name}}</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active</p>
                </div>

            </div>
        </div>
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
                                    <li class="active"><a href="member-profile.html">Profile</a></li>
                                    <li><a href="{{route('myrequests')}}">My Requests</a></li>
                                    <li><a href="{{route('cart')}}">Cart</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav End -->

                            <!-- Profile Details Start -->
                            <div class="profile--details fs--14">
                                <!-- Profile Item Start -->
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
                                                <td><a href="#" class="btn-link">{{$user->title.' '.$user->first_name.' '.$user->other_names}}</a></td>
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
                                <!-- Profile Item End -->

                                <!-- Profile Item Start -->
                                {{-- <div class="profile--item">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">Biography</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>
                                </div> --}}
                                <!-- Profile Item End -->

                                <!-- Profile Item Start -->
                                {{-- <div class="profile--item d-none">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">Work Experience</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>

                                    <div class="profile--info">
                                        <dl>
                                            <dt>
                                                <p class="h6 fw--700 text-darkest">Graphic Designer 2010 - 2012</p>
                                                <p><small class="fw--400 fs--12 text-darker">Graphicriver.net at Sydney</small></p>
                                            </dt>
                                            <dd>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                                            </dd>

                                            <dt>
                                                <p class="h6 fw--700 text-darkest">Font-End Developer 2012 - 2014</p>
                                                <p><small class="fw--400 fs--12 text-darker">Themeforest.net at Australia</small></p>
                                            </dt>
                                            <dd>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                                            </dd>

                                            <dt>
                                                <p class="h6 fw--700 text-darkest">Web Developer 2014 - Still Now</p>
                                                <p><small class="fw--400 fs--12 text-darker">Codecanyon.net at Sydney</small></p>
                                            </dt>
                                            <dd>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                                            </dd>
                                        </dl>
                                    </div>
                                </div> --}}
                                <!-- Profile Item End -->

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
                                                <td><a href="mailto:demo@fakemail.com">{{auth()->user()->email}}</a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Country</th>
                                                <td><a href="#">{{$user->country}}</a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Address</th>
                                                <td>{{$user->address}}</td>
                                            </tr>
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
