 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <img src="{{url('backend/dist/img/me.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Saumitro Mohaldar</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Questions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@if(\Request::route()->getName()=='all-questions') active @endif"><a href="{{url('admin/all-questions')}}"><i class="fa fa-circle-o"></i> All Questions</a></li>
            <li class="@if(\Request::route()->getName()=='add-question') active @endif"><a href="{{url('admin/add-question')}}"><i class="fa fa-circle-o"></i> Add Question</a></li>
            <li class="@if(\Request::route()->getName()=='category-tree-view') active @endif"><a href="{{url('admin/category-tree-view')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li class="@if(\Request::route()->getName()=='subject') active @endif"><a href="{{url('admin/subject')}}"><i class="fa fa-circle-o"></i> Subjects</a></li>
            <li class="@if(\Request::route()->getName()=='question-type') active @endif"><a href="{{url('admin/question-type')}}"><i class="fa fa-circle-o"></i> Question Types</a></li>
          </ul>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>