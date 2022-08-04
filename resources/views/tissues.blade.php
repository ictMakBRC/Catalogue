@extends('layouts.main')
@section('title', 'BioSpecimen')
@section('content')

					<!--end row-->


                    <main class="site-content">
                        <div class="page_header d-flex align-items-center">
                            <div class="container">
                                <section>
                                    <h2>Tissues.</h2>
                                    <div class="breadcrumbs">
                                        <a href="#">Home</a>
                                        <span>tissues</span>
                                    </div>
                                </section>
                            </div>
                        </div><!-- /.page_header -->
                        <div class="blog_posts">
                            <div class="container-md">
                                <div class="row">
                                    <div class="col-xl-10 text-center">
                                        <h6>Collecting, managing and distributing samples for research & discoveryAbout BSRU
                                            In collaboration with the CHOP Biorepository Core and the Department of Pathology, under
                                             the leadership of Mariarita Santi, MD, PhD, the Biospecimen Research Unit (BRU) is responsible for the standardized collection,
                                             processing, management, and distribution of samples for research
                                            and discovery.</h6>
                                    </div>

                                    @if(count($tissues)>0)
                                    @foreach($tissues as $value)
                                    <div class="col-xl-6">
                                        <div class="blog-card d-flex flex-sm-row flex-column">
                                            <div class="the_post_thumbnail">
                                                <a href="#"><img src="{{url('web/img/blog/tissue.png')}}" alt="Blog Title" /></a>
                                            </div>
                                            <div class="blog-card-body">

                                                <h2 class="the_title">
                                                    <a href="#"> Specimen Type: {{ $value->myspecimen}}</a>
                                                </h2>
                                                <h4>Qty: <span class="counter text-success">{{ $value->count}}</span></h4>
                                                <br>
                                                <p>Available</p>
                                                <a href="{{url('tissues/specimenType/'.$value->myspecimen)}}" class="the_permalink">View more <i class="icofont-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    @endif

                                </div>
                            </div>
                            {{$tissues->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        <div class="cta-section cta-bg mb-0">
                            <div class="container">
                                <div class="row align-items-center justify-content-xl-between justify-content-center">
                                    <div class="col-xl-8">
                                        <section>
                                            <h2>Need a Biospecimen Suppliers To <span>Large In Vitro Diagnostics Companies!</span></h2>
                                        </section>
                                    </div>
                                    <div class="col-xl-4 px-xl-0">
                                        <div class="action text-white text-center">
                                            <h2>Call Us : +256 568 468</h2>
                                            <p class="text-xl-right text-center">For an more info</p>
                                            <i class="icofont-woman-in-glasses"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.cta-section -->
                    </main>

                    <!-- /.site-content -->
          @endsection
