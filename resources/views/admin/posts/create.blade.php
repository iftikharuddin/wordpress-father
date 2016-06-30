@extends('layouts.admin')

	@section('title')
	   New User
	@endsection

	@section('description')
			this is a cool description Olamba
	@endsection

	@section('tiptitle')
		Note: 
	@endsection

	@section('tipdescription')
		This Form is used to create new user
	@endsection


	@section('content')
	   <div class="col-md-8">
		   <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/admin/posts') }}">
			   {!! csrf_field() !!}
				  <div class="box-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                         <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                {!! Form::select('category_id', ['' => 'Choose Category'] + $categories, null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        
                        <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload Image</label>

                            <div class="col-md-6">
								{!! Form::file('photo_id', null) !!}
                                @if ($errors->has('photo_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Enter Description</label>
                            <div class="col-md-6">
                                <input type="textarea" class="form-control" name="body">
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

				  </div>
				  <!-- /.box-body -->

				  <div class="box-footer">
					<div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>Register
                                </button>
                    </div>
				  </div>
			</form>
	  </div>
	@section('contentfooter')
		Creating New Users data 
	@endsection
          
@endsection
