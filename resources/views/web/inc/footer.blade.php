<footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pt--70 pb--20 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-5 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">About Us</h2>

                        <!-- Text Widget Start -->
                        <div class="text--widget">
                            <p>Integrated Biorepository of H3Africa Uganda (IBRH3AU), is a state of the art Biorepository
                                in Uganda. A one stop center of well annotated, quality assured and well characterized Biospecimens for Genomics
                                and other research in communicable and non-communicable diseases. Our mission is to develop, maintain and sustain a state-of-the-art world class Biorepository for the responsible storage, maintenance, and custodianship of well-annotated high-quality Biospecimens and to make these specimens
                                available to researchers for genomic discovery and other biomedical research</p>
                        </div>
                        <!-- Text Widget End -->
                    </div>
                    <!-- Widget End -->


                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">

                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Contact us</h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="mailTo:info@ibru.mak.ac.ug">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="text">info@ibru.mak.ac.ug</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="callTo:+256-782-752-582">
                                        <i class="fa fa-phone"></i>
                                        <span class="text">+256-782-752-582</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="faxTo:+256-414-531-938">
                                        <i class="fa fa-fax"></i>
                                        <span class="text">+256-414-531-938</span>

                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Tags</h2>

                        <!-- Tags Widget Start -->
                        <div class="tags--widget">
                            <ul class="nav">
                                <li><a href="#">Plasma</a></li>
                                <li><a href="#">DNA</a></li>
                                <li><a href="#">Sperm</a></li>
                                <li><a href="#">Whole Blood for DNA</a></li>
                                <li><a href="#">Serum</a></li>
                                <li><a href="#">PaxGene RNA Blood tube</a></li>

                            </ul>
                        </div>
                        <!-- Tags Widget End -->
                    </div>
                    <!-- Widget End -->

                </div>

                <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Some of Catagories</h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('web/tissues')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Tissues</span>
                                        <span class="count">({{$tissuesAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('web/biospecimens')}}" >
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Biospecimen</span>
                                        <span class="count">({{$biospecimensAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Organs</span>
                                        <span class="count">({{$organsAll}})</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget End -->

                              <!-- Widget Start -->
                              <div class="widget">

                                <h2 class="h4 fw--700 widget--title">Subscribe To Our Newsletter</h2>

                                <!-- Newsletter Widget Start -->
                                <div class="newsletter--widget style--1" data-form="validate">
                                    <form action="" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" placeholder="Enter your emil address" class="form-control" autocomplete="off" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn-link"><i class="fa fa-send-o"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Newsletter Widget End -->
                            </div>
                            <div>
                                <ul class="header--topbar-social nav float--left">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <!-- Widget End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Extra Start -->
    {{-- <div class="footer--extra bg-darker pt--30 pb--40 text-center">
        <div class="container">
            <!-- Widget Start -->
            <div class="widget">
                <h2 class="h4 fw--700 widget--title">Recent Active Members</h2>

                <!-- Recent Active Members Widget Start -->
                <div class="recent-active-members--widget style--2">
                    <div class="owl-carousel" data-owl-items="12" data-owl-nav="true" data-owl-speed="1200" data-owl-responsive='{"0": {"items": "3"}, "481": {"items": "6"}, "768": {"items": "8"}, "992": {"items": "12"}}'>
                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/01.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/02.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/03.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/04.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/05.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/06.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/07.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/08.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/09.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/10.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/11.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/12.jpg" alt=""></a>
                        </div>

                        <div class="img">
                            <a href="member-activity-personal.html"><img src="img/widgets-img/recent-active-members/13.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Recent Active Members Widget End -->
            </div>
            <!-- Widget End -->
        </div>
    </div> --}}
    <!-- Footer Extra End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright pt--30 pb--30 bg-darkest">
        <div class="container">
            <div class="text fw--500 fs--14 text-center">
                <p>Copyright &copy; Mark<span>BRC</span>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
