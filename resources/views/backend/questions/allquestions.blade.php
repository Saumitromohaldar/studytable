@extends('backend.layouts.app')

@section('content')
 <section class="content-header">
      <h1>
        Dashboard <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
  </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <div class="col-md-12">
          <div class="box box-primary">


            <div class="box-header with-border">
              <div class="col-md-4">
                <h3 class="box-title">All Question</h3>
              </div>
              <div class="col-md-8">
               
                <form method="get" action="{{url('admin/all-questions')}}">
                   {{ csrf_field() }}
                   <div class="col-md-9">
                     <div class="form-group">
                      
                      <input type="text" class="form-control" id="question" name="question" placeholder="Search" value="{{!empty($_GET['question'])?$_GET['question']:''}}">
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                     <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                  

                </form>


              </div>
            </div>
          

            
             @include('backend.questions.data')
                        

          </div>
       </div>
        
        
      </div>
      <!-- /.row -->
      
      <!-- /.row (main row) -->

    </section>
@endsection