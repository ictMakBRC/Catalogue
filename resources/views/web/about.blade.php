@extends('web.layouts.webLayout')
@section('title', 'About')
@section('content')



        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/bg.jpg')}}" data-overlay="0.75">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">About Us</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">About</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Section Start -->
        <div class="section pt--80 pb--40">
            <div class="container">
                <div class="title text-center pb-8">
                    <h2 class="h2 fw--600">About IBRH3AU Biorepository</h2>
                </div>
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--40">
                        <img src="{{url('site/img/about-img/01.jpg')}}" alt="">
                        <p>Integrated Biorepository of H3Africa Uganda <a class="">(IBRH3AU)</a>, is a state of the art Biorepository in Uganda.
                            A one stop center of well annotated, quality assured and well characterized Biospecimens for Genomics
                            and other research in communicable and non-communicable diseases. Our mission is to develop, maintain and
                            sustain a state-of-the-art world class Biorepository for the responsible storage, maintenance, and
                            custodianship of well-annotated high-quality Biospecimens and to make these specimens available to
                            researchers for genomic discovery and other biomedical research. The Bioreppository also offers training
                            in collection, processing, storage, shipment and analysis of an array of Biospecimens including environmental samples and human tissues.</p>
                    </div>

                    <div class="col-md-6 pb--40">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="content fs--14">


                                <p>

                                    The ultimate goal of IBRH3AU is to develop a state-of-the-art world class biorepository of well annotated
                                    and characterized biospecimens widely available to the H3Africa Consortium, African and International
                                    researchers for genomic discovery projects. The information obtained from the genomic analysis of the
                                    samples will allow researchers to develop or test new diagnostic tests, personalized treatment options,
                                    and develop new treatment methods. Over the course of the project, the Integrated Biorepository of
                                    H3Africa Uganda has developed capacity to perform biorepository services; collect/receive, process,
                                    store and ship Biospecimens as per international standards and has developed training resources in biorepository
                                    science and management. IBRH3AU has a well annotated collection of various Biospecimen (DNA, RNA, PBMCs, Serum,
                                    Plasma, e.t.c.), environmental exposure samples and human tissues, and the associated phenotypic data held at H3Africa Biospecimen
                                    catalog managed by H3ABionet and the H3Africa data and Biospecimen access committee (DBAC). Other biospecimens available at IBRH3AU are
                                    accessible through the IBRH3AU Catalog (www.ibru.mak.ac.ug/Catalog). IBRH3AU has collected and stored samples from over 40,000 COVID-19
                                    cases and controls, these samples are available to local and international researchers. Furthermore, IBRH3AU was the second laboratory to
                                    be activated for COVID-19 testing in the country. IBRH3AU continues to carry out clinical testing for COVID-19 as part of the national
                                    response. To date, the laboratory has conducted over 50,000 tests for COVID-19 and established a repository of these samples.</p>
                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Features Section Start -->
        <section class="section pt--40 pb--10">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-12  pb--40">
                        <!-- Feature Item Start -->
                        <div class=" text-center">


                            <div class="sub-title">
                                <h3 class="h2 fs--16">Background</h3>
                            </div>

                            <div class="desc">
                                <p style="font-size:15px;">Many ailments that were once incurable such as infertility, sickle cell anaemia, leukaemia, kidney and liver failure have been addressed through tissue or organ donation. Such diseases are abundant in Uganda. However, while organ transplant has become routine in developed countries, in Africa, only a few can access such care abroad at exorbitant costs. Capacity in transplant medicine in Uganda is being built through training doctors and health workers as well as establishing specialized hospitals in public and private sector. One of the remaining gaps in this field is the capacity to have quality assured biobanks that collect, store, retrieve and distribute viable tissues and organs in a well-regulated standardized manner. Makerere University, at College of Health Sciences (CHS) has pioneered Biobanking in Uganda through establishing the first well annotated, quality assured biorepository <a href="https://www.ibru.mak.ac.ug" target="_blank">https://www.ibru.mak.ac.ug,</a> for nucleic acids, blood and its derivatives with over 200,000 samples in storage over the last 10 years. We have now expanded scope to include tissue and organ biobanking. The biobank will now locally provide quality tissues and organs for health care, support training and catalyze research as well as resource mobilization.</a></p>

                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>


                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section pt--80 pb--20">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md- pb--50">
                        <!-- Text Block Start -->
                        <div class="text--block pb--10">
                            <div class="title">
                                <h2 class="h2 fw--600">The concept</h2>
                            </div>

                            <div class="content fs--14">
                                <p >The IBRH3AU Biospecimen Catalog is a publicly accessible Biospecimen Catalog of viable Biospecimens, tissue and organs. The catalog showcases the available Biospecimens, human tissue and organs, informing potential beneficiaries and health care givers of the availability of these well stored Biospecimens (sperm, ova and umbilical cord blood) that can be used as part of the treatment regimen. The catalogue makes public the tissue and organ inventories with their associated phenotypic definitions, with mechanisms for the public and potential beneficiaries to access and request from a pool of Biospecimens stored at the Biorepository. It also presents any of the research project’s discoveries and publications to enable the sharing of research outputs generated from the research to the global research community.</p>

                            </div>
                        </div>
                        <!-- Text Block End -->

                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--1" data-overlay="0.3">
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

        <!-- History Section Start -->
        <section class="section bg-lighter pt--80 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">Key catalogue functions</h2>
                    </div>


                </div>
                <!-- Section Title End -->

                <!-- Timeline Start -->
                <div class="timeline">
                    <ul class="nav MasonryRow" data-scroll-reveal="group">
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>The Catalog provides an unlimited easy access to high quality Biospecimens, human tissues and organs by potential recipients or researchers. It is a single convenient point of access to a pool of Biospecimens.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>We're trusted by many leading research institutions, academic institutes and biomedical companies for diagnostics, health care or basic research. Through the catalog you are able to search and request for biospecimens or human tissues/organs for health care or basic research needs.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>The objective is to facilitate research that will benefit study participants and the general public through making publically available the Biospecimens and data following the necessary guidelines.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>The Biospecimen Catalogue offers researchers, potential organ and tissue recipients and the interested public the ability to search information about IBRH3AU Biorepository, Advancing Tissue and Organ Biobanking in Uganda.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>Access to the Biospecimens deposited at the IBRH3AU biorepository and the associated resulting data. Access to the Biospecimens and data is controlled by the Biorepository Data and Biospecimen Access Committee.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline--item mb--60">
                                <div class="timeline--content fs--14">
                                    <p>The catalog users are able to perform basic and advanced searches, e.g. (Participant – by sex, age, ethnicity, etc., or Biospecimen Type, storage conditions, etc.), from search results users can submit a request for access for the data or biospecimens to the Biorepository Data and Biospecimen Access Committee.</p>
                                </div>

                                <div class="timeline--footer fs--14 bg-primary">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Timeline End -->
            </div>
        </section>



@endsection
