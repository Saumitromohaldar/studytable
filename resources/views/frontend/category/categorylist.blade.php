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
            <div class="postcontent nobottommargin clearfix widget widget_links">
            
               <ul class="category_list">
                @foreach($categories as $category)

                    <li class="parent-category">
                        
                        @if(count($category->childs))
                         <h4>{{ $category->title }}</h4>                            
                        @else
                            <a  href="{{url('category')}}/{{preg_replace('/\s+/u', '-', trim($category->title))}}/{{$category->id}}">
                                {{ $category->title }}
                            </a>
                        @endif

                        @if(count($category->childs))

                            @include('frontend.category.manageChild',['childs' => $category->childs])

                        @endif

                    </li>

                @endforeach
            </ul>

            </div><!-- .postcontent end -->

           @include('frontend.layouts.sidebar')

        </div>

    </div>

</section><!-- #content end -->
@endsection
