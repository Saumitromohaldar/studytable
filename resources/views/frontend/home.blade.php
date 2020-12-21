@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
@include('frontend.layouts.slider')

<!-- Content
        ============================================= -->
<section id="content">

    <div class="content-wrap">

        

        <div class="container clearfix">
            <div class="heading-block bottommargin-sm">
                <h3>Exam Name</h3>
            </div>
            <div class="portfolio grid-container portfolio-masonry clearfix">
            <article class="portfolio-item pf-media pf-icons fs-50">
                <div class="portfolio-image primary-bg">
                    
                    <a class="home-item-list" href="{{url('exam-name/bcs/6')}}">BCS</a>
                    
                    <div class="portfolio-overlay">
                        <a href="{{url('exam-name/bcs/6')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('exam-name/bank/12')}}" class="home-item-list">
                    BANK
                    </a>
                    <div class="portfolio-overlay">                        
                        <a href="{{url('exam-name/bank/12')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('exam-name/teacher-registration/13')}}"  class="home-item-list">
                        Teacher registration
                    </a>
                    <div class="portfolio-overlay">
                        
                        <a href="{{url('exam-name/teacher-registration/13')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <!-- <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('exam-name/bcs/10')}}"  class="home-item-list">
                    পিএসসি ও অন্যান্য নিয়োগ পরীক্ষা
                    </a>
                    <div class="portfolio-overlay">
                       
                        <a href="{{url('exam-name/bcs/10')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article> -->

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('exam-name/primary-assistant-teacher/23')}}"  class="home-item-list">
                     Primary Assistant Teacher
                    </a>
                    <div class="portfolio-overlay">                       
                        <a href="{{url('exam-name/primary-assistant-teacher/23')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>


            </div>

            <div class="clear"></div>

        </div>

        <div class="section ">
         <div class="container clearfix">

            <div class="heading-block bottommargin-sm">
                <h3>Subject</h3>
            </div>

            <div class="portfolio grid-container portfolio-masonry clearfix">

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/general-knowledge-bangladesh/6')}}"  class="home-item-list">
                    General knowledge bangladesh
                    </a>
                    <div class="portfolio-overlay">                        
                        <a href="{{url('categories/general-knowledge-bangladesh/6')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/general-knowledge-international/7')}}"  class="home-item-list">
                    General knowledge International
                    </a>
                    <div class="portfolio-overlay">                       
                        <a href="{{url('categories/general-knowledge-international/7')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/bangla-grammar/8')}}"  class="home-item-list">
                        Bangla grammar
                    </a>
                    <div class="portfolio-overlay">
                       
                        <a href="{{url('categories/bangla-grammar/8')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/bangla-literature/9')}}"  class="home-item-list">
                       Bangla Literature
                    </a>
                    <div class="portfolio-overlay">
                      
                        <a href="{{url('categories/bangla-literature/9')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg ">
                    <a href="{{url('categories/english-grammar/10')}}"  class="home-item-list">
                    English grammar
                    </a>
                    <div class="portfolio-overlay">
                       
                        <a href="{{url('categories/english-grammar/10')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>
                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/english-literature/11')}}"  class="home-item-list">
                        English Literature
                    </a>
                    <div class="portfolio-overlay">                      
                        <a href="{{url('categories/english-literature/11')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>

            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/mathematics/5')}}"  class="home-item-list">
                    Mathematics
                    </a>
                    <div class="portfolio-overlay">                       
                        <a href="{{url('categories/mathematics/5')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>
            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image primary-bg">
                    <a href="{{url('categories/general-knowledge-computer/18')}}"  class="home-item-list">
                    General knowledge computer
                    </a>
                    <div class="portfolio-overlay">                        
                        <a href="{{url('categories/general-knowledge-computer/18')}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                    </div>
                </div>                
            </article>
            </div>
            <div class="clear"></div>

        </div>
    </div>

           

    </div>

</section><!-- #content end -->
@endsection
