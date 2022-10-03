@extends('web.layouts.webLayout')
@section('title', 'Home')
@section('content')


        <!-- Header Section End -->

        <!-- Banner Section Start -->
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
                                                <h1 class="h1 text-lightgray">The Catalogue</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h3 class="h2 text-lightgray">Biospecimens, Organs &amp; Tissues</h3>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>A single convenient point of access to a pool of Biospecimens, Human Organs and Tissues.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Make a request</a>
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
                                                <h1 class="h1 text-lightgray">The Biospecimens</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h3 class="h2 text-lightgray">Search &amp; Request</h3>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>We have well annotated and quality controlled Nucleic acids (DNA & RNA), PLASMA, PBMCs, stool and many other Biospecimens.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Make a Request</a>
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
                <div class="banner--item" data-bg-img="{{url('web/img/bg/organbg.jpg')}}" data-overlay="0.55">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80 text-center">
                                            <div class="title">
                                                <h1 class="h1 text-lightgray">Human Organs</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h3 class="h2 text-lightgray">Browse  &amp; Request</h3>
                                            </div>

                                            <div class="desc text-gray fs--16">
                                                <p>This overview of the organs in the body can help people understand how various organs and organ systems work together. Learn more here.</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="#" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">Make a Request</a>
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
        <section class="section bg-lighter pt--40 pb--10">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-12 col-xs-12 col-xxs-12 pb--20">
                        <!-- Feature Item Start -->
                        <div class="section--title pb--20 text-center">
                            <h2 id="About" class="h2 fw--600"> About the Catalog </h2>
                            <h4> The Catalog provides access to a pool of well annotated Biospecimens, organs and tissues. It gives the researchers the ability to browse the available biospecimens, study descriptions, and allows them to request access to these items. 
                                It is a single convenient point of access to a pool of different sample types.</h4>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section bg-lighter pt--10 pb--10">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--10">
                        <!-- Text Block Start -->
                        <div class="text--block pb--10">
                            <div class="title">
                                <h2 class="h2 fw--600">Why Choose Us?</h2>
                            </div>

                            <div class="content fs--14">
                                <p>We're trusted by many leading research institutions, academic institutes and biomedical companies for diagnostics, health care and basic research.</p>
                            </div>
                        </div>
                        <!-- Text Block End -->

                        <div class="row AdjustRow">
                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-vial"></i>
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
                                            <h2 class="h6 fw--700">Human Organs</h2>
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

                    <div class="col-md-6 pb--10">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--1" data-overlay="0.1">
                            <img src="{{url('site/img/why-choose-us-img/video-poster-1.jpg')}}" alt="" style="height:100%; width:100%">

                            <a href="https://www.youtube.com/watch?v=Zs5-_Je8DOY" class="btn-link" data-trigger="video_popup">
                                <span><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                        <!-- Video Popup End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->

        <!-- How It Works Section Start -->
        <section class="section pt--70 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">How It Works?</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-7 pb--40">
                        <div class="row gutter--15" data-scroll-reveal="group">

                            <div class="col-md-4 m-40 pb--15 team-member">

                                <img class="member-photo" src="{{url('site/img/specimens/05.jpg')}}" alt="">
                                <br>

                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h2>
                                </div>
                                <h2><a href="#">Bio Specimens</a></h2>
                                <p><a href="{{url('biospecimens')}}">View All</a></p>

                            </div>

                            <div class="col-md-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/06.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h2>
                                </div>
                                <h2><a href="#">Organs</a></h2>
                                <p><a href="{{url('tissues')}}">View All</a></p>
                            </div>

                            <div class="col-md-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/07.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{$tissues}}</span>+</h2>
                                </div>
                                <h2><a href="#">Tissues</a></h2>
                                <p><a href="{{url('tissues')}}">View All</a></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-5 pb--40">
                        <!-- Info Items Start -->
                        <div class="info--items" data-scroll-reveal="group">
                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="{{url('site/img/how-it-works-img/icon-07.png')}}" alt="">
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
                                    <img src="{{url('site/img/how-it-works-img/icon-025.png')}}" alt="">
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
                                    <img src="img/how-it-works-img/icon-03y.png" alt="">
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

        <!-- Most Popular Groups Section End -->

        <!-- Members and Testimonial Section Start -->

        <!-- Members and Testimonial Section End -->
        

        <!-- Summary Biospecimen Section Start -->
        <section class="section bg-lighter pt--10 pb--10">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-12 col-xs-12 col-xxs-12 pb--10">
                        <!-- Feature Item Start -->
                        <div class="section--title pb--10 text-center">
                            <h3 id="About"> A snipet of the available Biospecimen </h3>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    @if(count($specimenTypes)>0)
                    @php($i=1)
                    @foreach($specimenTypes as $value)
                    <div class="col-md-3 col-xs-6 col-xxs-6 pb--40">
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
        <!-- Summary Biospecimen Section End -->

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
                                    <h2 class="h2 fw--600">Contact us for any inquiries</h2>
                                </div>

                                <div class="content fs--12">
                                    <p>Find us at Makerere University, College of Health Sciences, School of Biomedical Sciences, Dept. of Immunology & Molecular Biology</p>
                                </div>

                                {{-- <div class="action text-uppercase mb-5">
                                    <a href="mailTo:info@ibru.mak.ac.ug" class="btn btn-sm btn-primary"><i class="fa mr--8 fa-email"></i>info@ibru.mak.ac.ug</a>
                                    <a href="callTo:+256-782-752-582" class="btn btn-sm btn-danger"><i class="fa mr--8 fa-mobile"></i>+256-782-752-582</a>
                                </div> --}}
                                <form action="forms/contact-form.php" method="post">
                                    <div class="row gutter--20">
                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Name *" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary mt--10">Send Message</button>
                                        </div>
                                    </div>

                                    <div class="status"></div>
                                </form>
                            </div>
                        </div>
                        <!-- Download Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ and Download Section End -->


@endsection
