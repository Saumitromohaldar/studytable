<!-- Header
    ============================================= -->
    <header id="header">

      <div id="header-wrap">

        <div class="container clearfix">

          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

          <!-- Logo
          ============================================= -->
          <div id="logo">
            <a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{url('frontend/images/logo.png')}}" alt="Study Table" title="Study Table"></a>
            <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{url('frontend/images/logo@2x.png')}}" alt="Study Table" title="Study Table"></a>
          </div><!-- #logo end -->

          <!-- Primary Navigation
          ============================================= -->
          <nav id="primary-menu" class="sub-title">

            <ul>
              <li class="current"><a href="{{url('/')}}"><div>Home</div></a>
                
              </li>
              <li><a href="#"><div>Exam Name</div></a>
                <ul>
                  <li><a href="{{url('exam-name/bcs/6')}}" title="BCS">BCS</a> </li>
                  <li> <a href="{{url('exam-name/bank/12')}}" title="Bank">Bank</a></li>
                  <li><a href="{{url('exam-name/teacher-registration/13')}}" title="Teacher Registration">Teacher Registration</a></li>
                  <!-- <li><a href="{{url('exam-name/psc-and-other-recruitment-tests/10')}}">পিএসসি ও অন্যান্য নিয়োগ পরীক্ষা</a></li> -->
                  <li><a href="{{url('exam-name/primary-assistant-teacher/23')}}" title="Primary Assistant Teacher Exam">Primary Assistant Teacher</a></li>
                </ul>
                
              </li>
              <li class=""><a href="#"><div>Subject</div></a>
                <ul>
                  <li><a href="{{url('categories/general-knowledge-bangladesh/6')}}">General Knowledge Bangladesh</a></li>
                  <li><a href="{{url('categories/general-knowledge-international/7')}}">General Knowledge International</a></li>
                  <li><a href="{{url('categories/bangla-literature/8')}}">Bangla Grammar</a></li>
                  <li><a href="{{url('categories/bangla-literature/9')}}">Bangla Literature</a></li>
                  <li><a href="{{url('categories/english-grammar/10')}}">English grammar</a></li>
                  <li><a href="{{url('categories/english-literature/11')}}">English Literature</a></li>
                  <li><a href="{{url('categories/mathematics/5')}}">Mathematics</a></li>
                  <li><a href="{{url('categories/general-knowledge-computer/18')}}">General Knowledge Computer</a></li>
                </ul>
              </li>
              <li class="mega-menu"><a href="#"><div>About Us</div></a></li>
              <li class="mega-menu"><a href="#"><div>Contact</div></a></li>
             
            </ul>

            <!-- Top Cart
            ============================================= -->
          

            <!-- Top Search
            ============================================= -->
            <div id="top-search">
              <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
              <form action="{{url('search')}}" method="get">
                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
              </form>
            </div><!-- #top-search end -->

          </nav><!-- #primary-menu end -->

        </div>

      </div>

    </header><!-- #header end -->