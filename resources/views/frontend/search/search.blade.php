@extends('frontend.layouts.app')

@section('content')


<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>You are searching for: {{$_GET['q']}}</h1>
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            
            
        </ol>
    </div>

</section><!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix " id="question_anser">
                <ol>
                    @include('frontend.exam.data')
                </ol>    
            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            @include('frontend.layouts.sidebar')

        </div>

    </div>

</section><!-- #content end -->
@endsection
