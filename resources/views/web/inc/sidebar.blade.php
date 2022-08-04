<div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 fw--700 widget--title">Update Profile</h2>

        <!-- Buddy Finder Widget Start -->
        <div class="buddy-finder--widget">
            <form method="POST" action="{{route('updateguest',[$user->id])}}" enctype="multipart/form-data">
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
                            <input type="text" id="surname2" class="form-control form-sm" readonly name="full_name" required value="{{$user->full_name}}"  >
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
                            <input type="email" id="email2" class="form-control form-sm" name="email" required value="{{$user->email}}" >
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
                    </div> <!-- end col -->
                      
                </div>
                <div class="d-grid mb-0 text-center">
                    <button class="btn btn-primary" type="submit"  id="submitButton2"> Update Account</button>
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

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 fw--700 widget--title">Archives</h2>

        <!-- Nav Widget Start -->
        <div class="nav--widget">
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-calendar-o"></i>
                        <span class="text">Jan - July 2017</span>
                        <span class="count">(86)</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar-o"></i>
                        <span class="text">Jan - Dce 2016</span>
                        <span class="count">(328)</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar-o"></i>
                        <span class="text">Jan - Dec 2015</span>
                        <span class="count">(427)</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Nav Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 fw--700 widget--title">Advertisements</h2>

        <!-- Ad Widget Start -->
        <div class="ad--widget">
            <a href="#">
                <img src="img/widgets-img/ad.jpg" alt="" class="center-block">
            </a>
        </div>
        <!-- Ad Widget End -->
    </div>
    <!-- Widget End -->
</div>