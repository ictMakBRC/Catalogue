@extends('web.layouts.webLayout')
@section('title', 'contact')
@section('content')

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="site/img/page-header-img/biobg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Contact</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Contact</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Section Start -->
        <div class="contact--section pt--20 pb--20">
            <div class="container">
                <!-- Map Start -->
                <!-- <div class="map mb--80" data-trigger="map" data-map-options='{"latitude": "23.790546", "longitude": "90.375583", "zoom": "16", "api_key": "AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"}'></div> -->
                <div class="map mb--20" >
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1180" height="421" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7487059574373!2d32.5749193135578!3d0.3384629997530572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb08cb8e0a77%3A0xa983e746af56f464!2sIntegrated%20Biorepository%20of%20H3Africa%20Uganda!5e0!3m2!1sen!2sug!4v1665166347576!5m2!1sen!2sug" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:421px;width:1180px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:421px;width:1180px;}</style></div></div>
                </div>
                <!-- Map End -->

                <div class="row">
                    <div class="col-md-3 pb--20">
                        <!-- Contact Info Items Start -->
                        <div class="contact-info--items" data-scroll-reveal="group">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-map-o"></i>Address:</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p>Makerere University, College of Health Sciences, School of Biomedical Sciences, Dept. of Immunology & Molecular Biology, Integrated Biorepository of H3Africa Uganda</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-envelope-o"></i>E-mail:</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="mailto:info@ibru.mak.ac.ug" class="btn-link">info@ibru.mak.ac.ug</a>, <a href="mailto:sekaro21@gmail.com " class="btn-link">sekaro21@gmail.com </a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-phone"></i>Telephone:</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="tel:+256-782-752-582" class="btn-link">+256-782-752-582</a>, <a href="tel:(+00)123123456" class="btn-link">+256-782-752-582</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info Items End -->
                    </div>

                    <div class="col-md-9 pt--90">
                        <!-- Contact Form Start -->
                        <div class="contact--form" data-form="ajax">
                            <div class="contact--title">
                                <h3 class="h4">Contact Us</h3>
                            </div>

                            <div class="contact--subtitle pt--15">
                                <h4 class="h6 fw--400 text-darkest">Please feel free to contact us for any inquiries.</h4>
                            </div>

                            <form action="{{route('contact')}}" method="post">
                                @csrf
                                <div class="row gutter--20">
                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Full Name *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address*" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="text" placeholder="Message *" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-primary mt--10">Send Message</button>
                                    </div>
                                </div>

                                <div class="status"></div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Footer Section Start -->
 @endsection
        <!-- Footer Section End -->


