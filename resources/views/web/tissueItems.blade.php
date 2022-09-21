@extends('web.layouts.webLayout')
@section('title', 'Tissues')
@section('content')
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{url('site/img/page-header-img/tissuebg.jpg')}}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Tissues</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  href="{{url('web')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Tissues</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                @include("dashboard.components.messages")
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-trigger="stickyScroll">
                       <livewire:tissue-table /> 
                    </div>
                    <!-- Main Content End -->
                    @include('web.inc.tissueCartSidebar')

                </div>
            </div>
        </section>

        @endsection
