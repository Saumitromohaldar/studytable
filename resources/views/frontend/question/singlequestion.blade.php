@extends('frontend.layouts.app')
@section('title', $question->question)
@section('content')

<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>{{$question->question}}</h1>        
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>            
            <li class="breadcrumb-item active" aria-current="page">{{$question->question}}</li>
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
               @if(!empty($question))
               <?php $slug=explode('?',$question->question)[0]; ?>
                 
                <div class="question_anser"> 
                    <a class="question" href="{{url('question')}}/{{preg_replace('/\s+/u', '-', trim($slug))}}/{{$question->id}}">{{$question->question}}</a>
                    <div class="answer_option">
                        <label><strong>a)</strong> {{$question->answer_a }}</label>
                        <label><strong>b)</strong> {{$question->answer_b }}</label>
                        <label><strong>c)</strong> {{$question->answer_c }}</label>
                        <label><strong>d)</strong> {{$question->answer_d }}</label>
                    </div>
                    @if(!empty($question->correct_answer))
                    <?php $correct_answer='answer_'.$question->correct_answer; ?>
                    <div class="correct_answer" id="divAnswer_{{$question->id}}">Answer: {{$question->correct_answer }}) {{$question->$correct_answer }}</div>
                   
                    <a class="view_answer" href="javascript:void(0)" onclick="$('#divAnswer_{{$question->id}}').slideToggle('slow')">View Answer</a>
                    @endif
                </div>
                
               @endif


            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            @include('frontend.layouts.sidebar')

        </div>

    </div>

</section><!-- #content end -->
@endsection
