<footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pt--20 pb--10 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
        <div class="container">
            <div class="row AdjustRow">

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--10">
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Contact Us</h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>
                                        <span class="text">Makerere University, College of Health Sciences, Department of Immunology and Molecular Biology</span>

                                    </a>
                                </li>
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
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--10">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Inventory Summary </h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('covid19')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">SARS-CoV-2</span>
                                        <span class="count">
                                            @if (isset($covAll))
                                            ({{$covAll}})
                                            @else    
                                            (0)                                     
                                            @endif
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('web/tissues')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Tissues</span>
                                        <span class="count">
                                            ( @if (isset($tissuesAll))
                                            {{$tissuesAll}}
                                            @else    
                                            0                                        
                                            @endif)
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('web/biospecimens')}}" >
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Biospecimens</span>
                                        <span class="count">
                                            @if (isset($biospecimensAll))
                                            ({{$biospecimensAll}})
                                            @else    
                                            (0)                                        
                                            @endif
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Human Organs</span>
                                        <span class="count">
                                            @if (isset($organsAll))
                                            ({{$organsAll}})
                                            @else    
                                            (0)                                        
                                            @endif
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--10">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Important Links</h2>
                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o"></i>
                                        <span class="text">The IBRH3AU Biorepository</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o"></i>
                                        <span class="text">Makerere Biomedical Research Center</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o"></i>
                                        <span class="text">Genomics, Molecular & Immunolgy Labs</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o"></i>
                                        <span class="text">School of Biomedical Sciences</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o"></i>
                                        <span class="text">Makerere University</span>

                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Tags Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--10">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Inventory Summary </h2>

                        <!-- Nav Widget Start -->
                        <div class="nav--widget">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('covid19')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">SARS-CoV-2</span>
                                        <span class="count">({{$covAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('web/biospecimens')}}" >
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Biospecimens</span>
                                        <span class="count">({{$biospecimensAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('covid19')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">DNA Samples</span>
                                        <span class="count">({{$covAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('web/tissues')}}">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Tissues</span>
                                        <span class="count">({{$tissuesAll}})</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder-o"></i>
                                        <span class="text">Human Organs</span>
                                        <span class="count">({{$organsAll}})</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--10">
                    <!-- Widget Start -->
                    <div class="widget">

                                <h2 class="h4 fw--700 widget--title">Subscribe to our Newsletter</h2>

                                <!-- Newsletter Widget Start -->
                                <div class="newsletter--widget style--1" data-form="validate">
                                    <form action="{{route('subscribe')}}" method="post" name="mc-embedded-subscribe-form" >
                                            @csrf
                                        <div class="input-group">
                                            <input type="email" name="email" placeholder="Enter your emil address" class="form-control" autocomplete="off" required>
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn-link"><i class="fa fa-send-o"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Newsletter Widget End -->

                                <!-- Tags Widget Start -->
                                <div class="tags--widget pt--10">
                                    <ul class="nav">
                                        @if (isset($specimensAll))
                                        @foreach ($specimensAll as $item)   
                                            <li><a href="#">{{$item->specimen_type}}</a></li>
                                        @endforeach
                                        <li><a href="#"><small>All</small></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- Tags Widget End -->

                            <div class="pt--8">
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
    </div>
    <!-- Footer Widgets End -->
    <!-- Footer Copyright Start -->
    <div class="footer--copyright pt--10 pb--10 bg-darkest">
        <div class="container">
            <div class="text fw--500 fs--14 text-center">
                <p>Copyright &copy;<span> MakBRC</span>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
