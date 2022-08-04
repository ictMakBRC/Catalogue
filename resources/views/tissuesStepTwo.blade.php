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
                                            In collaboration with the CHOP Biorepository Core and the Department of Pathology, under the leadership of Mariarita Santi, MD, PhD, the Biospecimen Research Unit (BRU) is responsible for the standardized collection, processing, management, and distribution of samples for research
                                            and discovery.</h6>
                                    </div>

                                    @if(count($tissues)>0)
                                    @foreach($tissues as $value)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Flush Accordion</h5>
                                            <hr/>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                              </button>
                                            </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                                    </div>
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
