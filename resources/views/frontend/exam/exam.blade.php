@extends('frontend.layouts.app')
@section('title',$questiontype->title)
@section('content')


<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>{{$questiontype->title}}</h1>
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>            
            <li class="breadcrumb-item active" aria-current="page">{{$questiontype->title}}</li>
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
            <div class="postcontent nobottommargin clearfix widget widget_links">
               @if(!empty($questiontypes))
                <ul class="exam-type">
                @foreach($questiontypes as $questiontype)
                    <li><a href="{{url('questions')}}/{{preg_replace('/\s+/u', '-', trim($questiontype->title))}}/{{$questiontype->id}}">{{$questiontype->title}}</a></li>
                @endforeach
                </ul>
               @endif


            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            @include('frontend.layouts.sidebar')

        </div>

    </div>

</section><!-- #content end -->
@endsection
