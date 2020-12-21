@extends('frontend.layouts.app')
@section('title',$category->title)
@section('content')


<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>{{$category->title}}</h1>
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
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
