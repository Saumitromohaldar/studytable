@extends('backend.layouts.app')

@section('content')
 <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
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
			<div class="col-md-6">

				<div class="box box-primary">

					<div class="box-header with-border">
		              <h3 class="box-title">Category List</h3>
		            </div>
		            <div class="box-body">

			    <ul id="tree1">

			        @foreach($categories as $category)

			            <li>
			            	<i class="indicator glyphicon glyphicon-plus-sign"></i>
			                {{ $category->title }}

			                @if(count($category->childs))

			                    @include('backend.category.manageChild',['childs' => $category->childs])

			                @endif

			            </li>

			        @endforeach

			    </ul>

			</div>
		</div>
	</div>

			<div class="col-md-6">



				<div class="box box-primary">

					<div class="box-header with-border">
		              <h3 class="box-title">Add New Category</h3>
		            </div>
		            <div class="box-body">
	  			{!! Form::open(['route'=>'add.category']) !!}


	  				@if ($message = Session::get('success'))

						<div class="alert alert-success alert-block">

							<button type="button" class="close" data-dismiss="alert">×</button>

						        <strong>{{ $message }}</strong>

						</div>

					@endif


	  				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

						{!! Form::label('Title:') !!}

						{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}

						<span class="text-danger">{{ $errors->first('title') }}</span>

					</div>


					<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">

						{!! Form::label('Category:') !!}

						{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control select2','data-live-search'=>"true", 'placeholder'=>'Select Category']) !!}

						<span class="text-danger">{{ $errors->first('parent_id') }}</span>

					</div>


					<div class="form-group">

						<button class="btn btn-success">Add New</button>

					</div>


	  			{!! Form::close() !!}

		  		</div>
		  	</div>
			</div>

      </div>
      <!-- /.row -->

      <!-- /.row (main row) -->

    </section>
@endsection
