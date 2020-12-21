@extends('backend.layouts.app')

@section('content')
 <section class="content-header">
      <h1>
        Question
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <h3 class="box-title">Add Question</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           {!! Form::open(['route'=>'add.question']) !!}
              @if ($message = Session::get('success'))

                  <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button> 

                          <strong>{{ $message }}</strong>

                  </div>

                @endif
              <div class="box-body">

                <div class="col-md-6">

                <div class="form-group {{ $errors->has('question') ? 'has-error' :'' }}">
                  <label for="question">Question</label>
                  <input type="text" class="form-control" id="question" name="question" placeholder="Question" value="{{old('question')}}">
                  @if ($errors->has('question'))
                      <div class="error help-block">{{ $errors->first('question') }}</div>
                  @endif
                  <div class="exist_message"></div>
                </div>

                <div class="form-group">
                  <label for="answer_a">Option A</label>
                  <input type="text" class="form-control" id="answer_a" name="answer_a" placeholder="Option A" value="{{old('answer_a')}}">
                </div>
                <div class="form-group">
                  <label for="answer_b">Option B</label>
                  <input type="text" class="form-control" id="answer_b" name="answer_b" placeholder="Option B" value="{{old('answer_b')}}">
                </div>
                <div class="form-group">
                  <label for="answer_c">Option C</label>
                  <input type="text" class="form-control" id="answer_c" name="answer_c" placeholder="Option C" value="{{old('answer_c')}}">
                </div>
                <div class="form-group">
                  <label for="answer_d">Option D</label>
                  <input type="text" class="form-control" id="answer_d" name="answer_d" placeholder="Option D" value="{{old('answer_d')}}">
                </div>
                <div class="form-group">
                  <label for="correct_answer">Correct Answer</label>
                 <!--  <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Correct Answer"> -->
                  {!! Form::select('correct_answer',['a'=>'A','b'=>'B',"c"=>'C','d'=>'D'], old('correct_answer'), ['class'=>'form-control', 'placeholder'=>'Select Correct Answer']) !!}

                </div>


                
              </div>
               <div class="col-md-6">

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="Description">{{old('description')}}</textarea>
                </div>

               


                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">

                  {!! Form::label('Category:') !!}

                  {!! Form::select('category_id',$allCategories, old('category_id'), ['class'=>'form-control select2','data-live-search'=>"true",'placeholder'=>'Select Category']) !!}

                  <span class="text-danger">{{ $errors->first('category_id') }}</span>

                </div>

                <div class="form-group {{ $errors->has('questiontype_id') ? 'has-error' : '' }}">

                  {!! Form::label('Exam Name:') !!}

                  {!! Form::select('questiontype_id[]',$allQuestiontypes, old('questiontype_id'), ['class'=>'form-control', 'multiple'=>'multiple','id'=>'questiontype_id']) !!}

                  <span class="text-danger">{{ $errors->first('questiontype_id') }}</span>

                </div>


                <div class="form-group {{ $errors->has('subject_id') ? 'has-error' : '' }}">

                  {!! Form::label('Subjects:') !!}

                  {!! Form::select('subject_id',$allSubjects, old('subject_id'), ['class'=>'form-control', 'placeholder'=>'Select Subject']) !!}

                  <span class="text-danger">{{ $errors->first('subject_id') }}</span>

                </div>
              </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
              {!! Form::close() !!}

          </div>
       </div>



        <div class="col-md-12">
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <div id="post-data">

              @include('backend.questions.data')

            </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
      
      <!-- /.row (main row) -->

    </section>
@endsection