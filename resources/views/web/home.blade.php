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
                <div class="banner--item" data-bg-img="{{url('site/img/banner-img/freezer.jpg')}}" data-overlay="0.55">
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
                <div class="banner--item" data-bg-img="{{url('site/img/banner-img/theatre_room.jpg')}}" data-overlay="0.55">
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
                                                <p>We're the leading Biopreservation and Biostorage provider in Sub-Saharan Africa.</p>
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
        <section id="about" class="section bg-lighter pt--40 pb--10">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-12 col-xs-12 col-xxs-12 pb--5">
                        <!-- Feature Item Start -->
                        <div class="section--title pb--20 text-justify">
                            <h1 class="h1 fw--600"> About the Catalog </h1>
                            <P> The Biospecimen Catalog provides access to a pool of well annotated Biospecimens, organs and tissues. It gives researchers the ability to browse the available biospecimens, associated study descriptions, and allows them to request access to these items.
                                It is a single convenient point of access to a pool of different Specimens.</p>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section bg-lighter pt--5 pb--10">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--10" data-scroll-reveal="group">
                        <!-- Text Block Start -->
                        <div class="text--block pb--20">
                            <div class="title">
                                <h3 class="h3 fw--600">Why Choose Us?</h3>
                            </div>

                            <div class="content fs--14">
                                <p>We're the leading Biopreservation and Biostorage provider in Sub-Saharan Africa. Trusted by many leading Research Institutions, Academic Institutions and Biomedical Companies for diagnostics, health care and basic research.</p>
                            </div>
                        </div>
                        <!-- Text Block End -->

                        <div class="row AdjustRow">
                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-medkit"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">SARS-COV-2</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We have Nasopharyngeal and Oralpharyngeal swabs, blood, urine, stool, plasma and PBMCS from CoVID-19 cases and controls.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-universal-access"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Human Organs</h2>
                                        </div>

                                        <div class="desc mt--8">
                                            <p>We have the capacity to process and store high quality human biosamples needed for diagnostics, drug, or basic research.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature Block End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12 pb--10">
                                <!-- Feature Block Start -->
                                <div class="feature--block mb--6 clearfix">
                                    <div class="icon fs--18 text-primary mr--20 float--left">
                                        <i class="fa fa-heartbeat"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Tissues</h2>
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
                                        <i class="fa fa-hospital-o"></i>
                                    </div>

                                    <div class="info ov--h">
                                        <div class="title">
                                            <h2 class="h6 fw--700">Biospecimens</h2>
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

                    <div class="col-md-6">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--1" data-overlay="0.1" style="vertical-align:middle; margin-top:40px;">
                            <img src="{{url('site/img/why-choose-us-img/ULT_Freezers.jpg')}}" alt="" width="100%" height="100%" style="border: 5px solid rgb(228, 225, 225);">
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
        <section class="section pt--60 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">How the Catalog works</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-7 pb--20">
                        <div class="row gutter--15" data-scroll-reveal="group">

                            <div class="col-md-4 m-40 pb--15 team-member">

                                <img class="member-photo" src="{{url('site/img/specimens/ULT_Freezers.jpg')}}" alt="">
                                <br>

                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h3>
                                </div>
                                <h2><a href="#">Biospecimens</a></h2>
                                <p><a href="{{url('biospecimens')}}">View All</a></p>

                            </div>

                            <div class="col-md-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/Theatre.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">{{$biospecimens}}</span>+</h3>
                                </div>
                                <h2><a href="#">Organs</a></h2>
                                <p><a href="{{url('tissues')}}">View All</a></p>
                            </div>

                            <div class="col-md-4 pb--15 team-member">
                                <img class="member-photo" src="{{url('site/img/specimens/sperms.jpg')}}" alt="">
                                <br>
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">{{$tissues}}</span>+</h3>
                                </div>
                                <h2><a href="#">Tissues</a></h2>
                                <p><a href="{{url('tissues')}}">View All</a></p>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-5 pb--20">
                        <!-- Info Items Start -->
                        <div class="info--items" data-scroll-reveal="group">
                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="{{url('site/img/how-it-works-img/Policy.png')}}" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">1. Read the Policies</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Read through the policies and process for requesting Biospecimens.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="{{url('site/img/how-it-works-img/Search.png')}}" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">2. Search for Specimens</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Search to find and select the Biospecimens of your interest.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="site/img/how-it-works-img/shopping.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">3. Create Shopping Cart</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Select the Biospecimens you want, to include them in a shopping cart.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="site/img/how-it-works-img/submit.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">4. Make a Request</h3>
                                    </div>

                                    <div class="desc">
                                        <p>Complete the Biospecimen request form, submit and wait for feedback.</p>
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

        <!-- Numbers Section Start -->
        <section class="section bg-lighter pt--50 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--40 text-center">
                    <div class="title">
                        <h2 class="h2">Our Catalog Numbers</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-12 pb--40 text-center">
                        <div class="row gutter--15" data-scroll-reveal="group">

                            <div class="col-md-2" style="text-align: center; margin-right:30px; margin-left:30px;">
                                <img class="member-photo" src="{{url('site/img/specimens/img-5.jpg')}}" alt="" Style="border: 5px solid rgba(217, 212, 212, 0.886); border-radius: 50%;">
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">99</span>%</h3>
                                    <p><strong>Viability</strong></p>
                                </div>
                            </div>

                            <div class="col-md-2" style="text-align: center; margin-right:30px;">
                                <img class="member-photo" src="{{url('site/img/specimens/img-4.jpg')}}" alt="" Style="border: 5px solid rgba(217, 212, 212, 0.886); border-radius: 50%;">
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">121</span>+</h3>
                                    <p><strong>Collaborations</strong></p>
                                </div>
                            </div>

                            <div class="col-md-2" style="text-align: center; margin-right:30px;">
                                <img class="member-photo" src="{{url('site/img/specimens/img-3.jpg')}}" alt="" Style="border: 5px solid rgba(217, 212, 212, 0.886); border-radius: 50%;">
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">238</span>+</h3>
                                    <p><strong>Studies</strong></p>
                                </div>
                            </div>

                            <div class="col-md-2" style="text-align: center; margin-right:30px;">
                                <img class="member-photo" src="{{url('site/img/specimens/img-1.jpg')}}" alt="" Style="border: 5px solid rgba(217, 212, 212, 0.886); border-radius: 50%;">
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">810,766</span>+</h3>
                                    <p><strong>Participants</strong></p>
                                </div>
                            </div>

                            <div class="col-md-2" style="text-align: center;">
                                <img class="member-photo" src="{{url('site/img/specimens/img-2.jpg')}}" alt="" Style="border: 5px solid rgba(217, 212, 212, 0.886); border-radius: 50%;">
                                <div class="title">
                                    <h3 class="h3 ff--default text-primary"><span data-trigger="counterup">2,653,982</span>+</h3>
                                    <p><strong>Biospecimens</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Numbers Section End -->

        <!-- FAQ and Download Section Start -->
        <section id="faq" class="section pt--50 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <div class="title pb--20">
                                <h2 class="h3 fw--600">Frequently Asked Questions</h2>
                            </div>

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Qn 1. Who are we?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <p style="text-align:justify;">
                                            This Catalog is maintained by <a href="#" target="_blank">IBRH3AU Biorepository</a>, a Biobank funded jointly by the <a href="#" target="_blank">NIH</a> and <a href="#" target="_blank">Makerere University</a> under the <a href="#" target="_blank">H3Africa</a> Biorepository Initiative, located at Makerere University College of Health Sciences (MakCHS) a Center of Academic Excellence, Health Care and Collaborative Research. The Biobank provides a resource of well characterized and annotated quality biospecimens. This resource is utilised by communicable and non-communicable disease researchers in an African population.
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
                                            <span>Qn 2. What is the turn-around-time for the requests</span>
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
                                            <span>Qn 3. What is our experience and success stories?</span>
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

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem04" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Qn 4. What kind of Biospecimens do we have and the quantiy?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem04" class="content collapse">
                                    <div class="content--inner">
                                        <p>Patients’ specimens play an absolutely pivotal role in medical advances.

                                            If you are considering participating in human biospecimen research, thank you! Although you will not materially benefit, you will be helping future patients.

                                            Tissue For Research does not liaise directly with patients and can not enroll patients directly for studies. Your hospital or hospice will usually have a research coordinator who can assist with this.
                                        </p>
                                        </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem05" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Qn 5. Who can request for these Biosamples</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem05" class="content collapse">
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

                    <div class="col-md-6 pb--60">
                        <!-- Download Block Start -->
                        <div class="download" data-scroll-reveal="group">

                            <div class="info">
                                <div class="title">
                                    <h2 class="h2 fw--600">Contact us!</h2>
                                </div>

                                <div class="content fs--12 pb--20">
                                    <p>Please feel free to contact us for any inquiries by filling this form below.</p>
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
