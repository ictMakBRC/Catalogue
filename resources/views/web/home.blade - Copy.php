@extends('web.layouts.webLayout')
@section('title', 'Home')
@section('content')
 <section class="banner--section">

               <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true" data-owl-dots-style="2">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{url('site/img/banner-img/slider-bg-1.jpg')}}" data-overlay="0.55">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80 text-center">
                                            <div class="title">
                                                <h1 class="h2 text-lightgray">HIGH QUALITY HUMAN TISSUE SAMPLES FOR WORLD-LEADING RESEARCH</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h2 text-lightgray">Whole Human Organs</h2>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>We are developing capacity to process and store well annotated and quality controlled human biosamples needed for diagnostics, drug, or basic research.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{url('site/img/banner-img/slider-bg-3.jpg')}}" data-overlay="0.55">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80 text-center">
                                            <div class="title">
                                                <h1 class="h1 text-lightgray">We provide</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h2 text-lightgray">Human Tissues</h2>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>We are excited to help you with your project by providing you with quality controlled human tissues for clinical or basic research purposes.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{url('site/img/banner-img/slider-bg-2.jpg')}}" data-overlay="0.55">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80 text-center">
                                            <div class="title">
                                                <h1 class="h1 text-lightgray">Specimens</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h2 text-lightgray">Other Biospecimens</h2>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>We have well annotated and quality controlled Nucleic acids (DNA & RNA), PLASMA, PBMCs, stool and many other Biospecimens.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Contact us</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

        <!-- Features Section Start -->
        <section class="section bg-lighter pt--80 pb--40">
            <div class="container">
                <div class="section--title pb--50 text-center">
                    <h2 id="About"> The Catalog </h2>
                    <h4> The Catalog is updated regularly with the latest data from the LIMS for all the studies at the <a href="https://www.ibru.mak.ac.ug/" target="_blank">IBRH3AU</a> Biorepository, We're trusted by many leading research institutions, academic institutes and biomedical companies for diagnostics, health care or basic research. Through the catalog you are able to search and request for biospecimens or
                        human tissues/organs for health care or basic research needs.</h4>
                    <h3 class="h2">OUR SERVICES</h3>
                    <p>The following list is not exhaustive;
                        please contact us with details of your requirements and we will be delighted to help.</p>
                </div>
                <div class="row AdjustRow">


                    @if(count($specimenTypes)>0)
                    @php($i=1)
                    @foreach($specimenTypes as $value)
                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">


                            <div class="sub-title">
                                <h3 class="h2 fs--16">{{$value->specimen_type}}</h3>
                            </div>

                            <div class="desc">
                                <p>Stored in {{$value->container_type}} at a temperature of {{$value->storage_temperature}}.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                    @endforeach
                    @endif




                </div>
            </div>

        </section>
        <!-- Features Section End -->

        <!-- How It Works Section Start -->
        <section class="section pt--70 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">How It Works?</h2>
                    </div>

                    <div class="">
                        <h6>The Catalog provides an unlimited easy access to high quality Biospecimens, human tissues and organs by potential recipients or researchers. It is a single convenient point of access to a pool of Biospecimens.</h6>
                    </div>

                </div>

                </div>
                <!-- Section Title End -->

                <div class="row p-4">
                    <div class="col-md-7 pb--40 ml-6">
                        <div class="row gutter--15  ml-3 AdjustRow" data-scroll-reveal="group">
                            <div class="col-xs-4 m-40 pb--15 team-member">

                                <img class="member-photo" src="{{url('site/img/specimens/05.jpg')}}" alt="">
                                <br>

                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h2>
                                </div>
                                <h2><a href="#">Bio Specimens</a></h2>
                                <p><a href="#">View All</a></p>

                            </div>

                            <div class="col-xs-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/06.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h2>
                                </div>
                                <h2><a href="#">Organs</a></h2>
                                <p><a href="#">View All</a></p>
                            </div>

                            <div class="col-xs-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/07.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$tissues}}</span>+</h2>
                                </div>
                                <h2><a href="#">Tissues</a></h2>
                                <p><a href="#">View All</a></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-5 pb--40">
                        <!-- Info Items Start -->
                        <div class="info--items" data-scroll-reveal="group">
                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="{{url('site/img/how-it-works-img/icon-01.png')}}" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Using the basic search tools</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Login not required</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="{{url('site/img/how-it-works-img/icon-02.png')}}" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Advanced search</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-03.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Requesting biospecimens</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/how-it-works-img/icon-04.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Contact information or assistance</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->
                        </div>
                        <!-- Info Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works Section End -->

        <!-- Most Popular Groups Section Start -->
        {{-- <section class="section bg-lighter pt--70 pb--70">
            <div class="container">
                <!-- Box Nav Start -->
                <div class="box--nav clearfix">
                    <h2 class="h2 fw--600 float--left">Most Popular Groups</h2>

                    <ul class="nav ff--primary float--right">
                        <li class="active"><a href="#boxItemsTab01" class="btn btn-default" data-toggle="tab">Newest</a></li>
                        <li><a href="#boxItemsTab02" class="btn btn-default" data-toggle="tab">Active</a></li>
                        <li><a href="#boxItemsTab03" class="btn btn-default" data-toggle="tab">Popular</a></li>
                        <li><a href="#boxItemsTab04" class="btn btn-default" data-toggle="tab">Alphabetic</a></li>
                    </ul>
                </div>
                <!-- Box Nav End -->

                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade in active" id="boxItemsTab01">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false" data-owl-responsive='{"0": {"items": "1"}, "481": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "4"}}'>
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab02">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab03">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab04">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->
                </div>
                <!-- Tab Content End -->
            </div>
        </section> --}}
        <!-- Most Popular Groups Section End -->

        <!-- Members and Testimonial Section Start -->
        <section class="section pt--70 pb--20">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-md-7 pb--60">
                        <!-- Section Title Start -->
                        <div class="section--title pb--20">
                            <div class="title">
                                <h2 class="h2">Most Popular Members</h2>
                            </div>
                        </div>
                        <!-- Section Title End -->

                        <!-- Member Slider Start -->
                        <div class="member--slider owl-carousel" data-owl-items="4" data-owl-autoplay="false" data-bg-img="img/members-img/pattern-bg.png" data-owl-nav="true" data-owl-center="true" data-owl-responsive='{"0": {"items": "1"}, "486": {"items": "3"}, "992": {"items": "4"}}'>
                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.html" class="btn-link">
                                                <img src="img/members-img/member-01.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.html" class="btn-link">Rosa R. Secor</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.html" class="btn-link">
                                                <img src="img/members-img/member-02.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.html" class="btn-link">Juan Bishop</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.html" class="btn-link">
                                                <img src="img/members-img/member-03.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.html" class="btn-link">Kelly Salazar</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item online">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.html" class="btn-link">
                                                <img src="img/members-img/member-04.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.html" class="btn-link">Gregory L. Caudill</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->

                            <!-- Member Item Start -->
                            <div class="member--item">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="img img-circle">
                                            <a href="member-activity-personal.html" class="btn-link">
                                                <img src="img/members-img/member-05.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="name">
                                            <h3 class="h6 fs--12">
                                                <a href="member-activity-personal.html" class="btn-link">William P. Waite</a>
                                            </h3>
                                        </div>

                                        <div class="activity">
                                            <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                        </div>

                                        <div class="actions">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-user-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                        <i class="fa fa-folder-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Member Item End -->
                        </div>
                        <!-- Member Slider End -->
                    </div>

                    <div class="col-md-5 pb--60">
                        <!-- Section Title Start -->
                        <div class="section--title pb--20">
                            <div class="title">
                                <h2 class="h2">Show Some Sweet Love</h2>
                            </div>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Items Start -->
                        <div class="testimonial--items owl-carousel" data-owl-dots="true" data-owl-margin="10" data-owl-autoplay="false" data-owl-animate="fadeOut">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/01.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ever.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Philip K. Rice &amp; Nina B. Bandy</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/02.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ever.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Philip K. Rice &amp; Nina B. Bandy</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item clearfix">
                                <div class="img mr--20 float--left">
                                    <img src="img/testimonial-img/03.jpg" alt="">
                                </div>

                                <div class="info">
                                    <blockquote class="fs--12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ever.</p>
                                    </blockquote>

                                    <div class="name">
                                        <h3 class="h6 fs--12">Philip K. Rice &amp; Nina B. Bandy</h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <!-- Testimonial Items End -->
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Members and Testimonial Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section bg-lighter pt--80 pb--20">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--50">
                        <!-- Text Block Start -->
                        <div class="text--block pb--10">
                            <div class="title">
                                <h2 class="h2 fw--600">Why Choose Us?</h2>
                            </div>

                            <div class="content fs--14">
                                <p>The Catalog provides an unlimited access to well annotated Biospecimens and human tissues.</p>
                            </div>
                        </div>
                        <!-- Text Block End -->

                        <div class="row AdjustRow">
                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-comments-o"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">SARS-COV-2</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We have Nasopharyngeal and Oralpharyngeal swabs, blood, urine, stool, plasma and PBMCS from CoVID-19 cases and controls available to aid your research</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-wrench"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Whole Human Organs</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We are developing capacity to process and store well annotated and quality controlled human biosamples needed for diagnostics, drug, or basic research.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-group"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Human Tissues</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We are excited to help you with your project by providing you with quality controlled human tissues for clinical or basic research purposes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Other Biospecimens</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We have well annotated and quality controlled Nucleic acids (DNA & RNA), PLASMA, PBMCs, stool and many other Biospecimens</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--1" data-overlay="0.1">
                            <img src="{{url('site/img/why-choose-us-img/video-poster-1.jpg')}}" alt="">

                            <a href="https://www.youtube.com/watch?v=YE7VzlLtp-4" class="btn-link" data-trigger="video_popup">
                                <span><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                        <!-- Video Popup End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->

        <!-- FAQ and Download Section Start -->
        <section class="section pt--70 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <div class="title pb--20">
                                <h2 class="h2 fw--600">Frequently Asked Question</h2>
                            </div>

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Why work with our Biobank Online?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <ul>
                                            <li>High Quality Facilities located in the Uganda.</li>
                                            <li>A Trusted Partner including for the world’s largest and most successful pharmaceutical firms and highly regarded academic centers.</li>
                                            <li> Responsibly collected in accordance with the relevant regulations and laws.</li>
                                            <li>   Expert clinical biorepositories and exceptional in-depth data with multiple sample formats.
                                            <li>  Dedicated whole body donor facilities provide a high quality service 24/7 with times from death to sampling that can be as low as 4 hours.
                                              <li>   Single and convenient point of access and project management service.

                                        </ul>
                                        <p>
                                            Samples from a wide range of diseases are available or can be collected, including:
                                            Cancer,
                                            Infectious,
                                            Inflammatory,
                                            Metabolic, Degenerative and others…
                                           </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem02" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Research and Education</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="content collapse">
                                    <div class="content--inner">
                                        <p>Human tissue samples and biofluid specimens such as blood samples are invaluable at all
                                            stages of drug/ therapeutic development, from target discovery and validation through to product testing for safety or
                                            efficacy, including FDA/ EMEA cross-reactivity panel testing.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem03" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Patients/Donors</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="content collapse">
                                    <div class="content--inner">
                                        <p>Patients’ specimens play an absolutely pivotal role in medical advances.

                                            If you are considering participating in human biospecimen research, thank you! Although you will not materially benefit, you will be helping future patients.

                                            Tissue For Research does not liaise directly with patients and can not enroll patients directly for studies. Your hospital or hospice will usually have a research coordinator who can assist with this.
                                        </p>
                                        </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->
                    </div>

                    <div class="col-md-7 pb--60">
                        <!-- Download Block Start -->
                        <div class="download--block" data-scroll-reveal="group">
                            <div class="img">
                                <img src="{{url('site/img/faq-img/mobile.png')}}" alt="">
                            </div>

                            <div class="info">
                                <div class="title">
                                    <h2 class="h2 fw--600">Please feel free to contact us for any inquiries</h2>
                                </div>

                                <div class="content fs--12">
                                    <p>Find us at Makerere University, College of Health Sciences, School of Biomedical Sciences, Dept. of Immunology & Molecular Biology</p>
                                </div>

                                <div class="action text-uppercase">
                                    <a href="mailTo:info@ibru.mak.ac.ug" class="btn btn-sm btn-primary"><i class="fa mr--8 fa-email"></i>info@ibru.mak.ac.ug</a>
                                    <a href="callTo:+256-782-752-582" class="btn btn-sm btn-danger"><i class="fa mr--8 fa-mobile"></i>+256-782-752-582</a>
                                </div>
                            </div>
                        </div>
                        <!-- Download Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ and Download Section End -->
@endsection
